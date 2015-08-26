<?php
namespace openrtb\abstractions;

abstract class BaseModel {
  //Type 'id' means string or integer. Spec defines 'id' as string but all examples and implementation pass 'id' as an integer...
  const ATTR_ID = 'id';
  const ATTR_STRING = 'string';
  const ATTR_INTEGER = 'integer';
  const ATTR_FLOAT = 'float';
  const ATTR_ARRAY = 'array';
  
  protected $attributes = [];
  protected $data = [];
  protected $modelName = '';

  public function __construct() {
    $this->modelName = get_class($this);
  }
  
  /**
   * Checks that a model has all required attributes set.
   * @return boolean
   */
  public function hasRequiredAttributes(){
    foreach($this->attributes as $k => $v){
      if(isset($v['required']) && ($v['required']===true)){
        if(!isset($this->data[$k])){
          return false;
        }
      }
    }
    return true;
  }
  /**
   * Populates the model from a JSON source (or json_decoded value)
   * @param string|stdClass $data The data
   * @param boolean $fromJSON Flag to bypass json_decode when $data is already decoded
   */
  public function hydrate($data, $fromJson = true){
    $data = ($fromJson)? json_decode($data) : $data;

    if($data){
      foreach($this->attributes as $attr=>$opts) {
        if(!property_exists($data, $attr)) {
          if(isset($opts['required']) && ($opts['required'] === true)) {
            throw new \openrtb\exceptions\ValidationException('Missing required attribute "' . $attr . '" for model '.$this->modelName.'.'); 
          } elseif(isset($opts['default_value'])) {
            $this->set($attr, $opts['default_value']);
          } 
          continue;
        }

        $subType = (isset($opts['sub_type']))? $opts['sub_type'] : null;

        //Hydrate properties
        if($this->isModel($opts['type'])) {
          $obj = new $opts['type'];
          $obj->hydrate($data->$attr, false);

          $this->set($attr, $obj);
        } elseif($opts['type'] === self::ATTR_ARRAY) {
          if(!$this->isModel($subType)) {
            $this->set($attr, $data->$attr);
          } else {
            $objs = array();
            foreach($data->$attr as $val) {
              $subObj = new $subType;
              $subObj->hydrate($val, false);
              $objs[] = $subObj;
            }

            $this->set($attr, $objs);
          }
        } else {
          $this->set($attr, $data->$attr);
        }
      }
    } else {
      throw new \openrtb\exceptions\ValidationException('Unable to parse json');
    }
  }
  /**
   * Validates a given value's type against schema definition
   * @param mixed $obj The value to validate
   * @param string $type The expected type
   * @param string $subType The expected subtype if applicable (when $type===array)
   * @return boolean
   */
  public function validateType($obj, $type, $subType = null){
    if($this->isModel($type)){
      if(is_a($obj, $type)){
        if($obj->hasRequiredAttributes()){
          return true;
        } else {
          throw new \openrtb\exceptions\ValidationException('Model type "'.$type.'" being set is missing required attributes');
        }
      } else {
        throw new \openrtb\exceptions\ValidationException('Unknown model type "'.$type.'" specified');
      }
    }
    switch($type){
      case self::ATTR_ID: 
        return (is_string($obj) || is_integer($obj))? true : false;
        break;
      case self::ATTR_STRING:
        return is_string($obj)? true : false;
        break;
      case self::ATTR_INTEGER:
        return is_integer($obj)? true : false;
        break;
      case self::ATTR_FLOAT:
        return is_numeric($obj)? true : false; //Values can come as int/string/float despite specification indicating a float type.
        break;
      case self::ATTR_ARRAY:
        //only collection type supported...
        if($subType !== null){
          if(is_array($obj)){
            $valid = true;
            foreach($obj as $subObj){
              if(!$this->validateType($subObj, $subType)){
                $valid = false;
              }
            }
            return $valid;
          } else {
            return false;
          }
        } else {
          throw new \openrtb\exceptions\ValidationException('Type is an array, but no subtype specified');
        }
        break;
    }
    throw new \openrtb\exceptions\ValidationException('Unknown native type "'.$type.'" specified');
    return false;
  }

  /**
   * Set an attribute onto the model
   * @param string $item Key name
   * @param mixed $value The value
   */
  public function set($item, $value){
    if(array_key_exists($item,$this->attributes)){
      if(isset($this->attributes[$item]['type'])){
        $type = $this->attributes[$item]['type'];
        $subType = isset($this->attributes[$item]['sub_type'])? $this->attributes[$item]['sub_type'] : null;
        if($this->validateType($value, $type, $subType)){
          $this->data[$item] = $value;
        } else {
          var_dump($value);
          throw new \openrtb\exceptions\ValidationException('Item "'.$item.'" failed validation of type "'.$type.'" for model '.$this->modelName);
        }
      } else {
        throw new \openrtb\exceptions\ValidationException('Item "'.$item.'" type is not defined in the schema for model '.$this->modelName);
      }
    } else {
      throw new \openrtb\exceptions\ValidationException('Item "'.$item.'" is not defined in the schema for model '.$this->modelName);
    }
  }
  /**
   * Returns a given attribute
   * @param string $item Attribute name
   * @return mixed
   */
  public function get($item){
    return isset($this->data[$item])? $this->data[$item] : null;
  }
  /**
   * Returns the model data as an 'array'
   * @return array
   */
  public function getDataAsArray(){
    $rtn = [];
    foreach($this->data as $k => $v){
      if($v instanceof \openrtb\abstractions\BaseModel){
        $rtn[$k] = $v->getDataAsArray();
      } else if(is_array($v)){
        $rtn[$k] = [];
        foreach($v as $sk => $sv){
          if($sv instanceof \openrtb\abstractions\BaseModel){
            $rtn[$k][] = $sv->getDataAsArray();
          } else {
            $rtn[$k][] = $sv;
          }
        }
      } else {
        $rtn[$k] = $v;
      }
    }
    return $rtn;
  }
  /**
   * Returns the model data as a JSON string
   * @return string
   */
  public function getDataAsJson(){
    return json_encode($this->getDataAsArray());
  }

  protected function isModel($type) {
    return preg_match('/^openrtb\\\models\\\/', $type);
  }
  
}