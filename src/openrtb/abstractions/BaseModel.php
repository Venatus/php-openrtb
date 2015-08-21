<?php
namespace openrtb\abstractions;

abstract class BaseModel {
  
  protected $attributes = [];
  protected $data = [];
  
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
  
  public function validateType($obj, $type, $subType = null){
    if(preg_match('/^openrtb\\\models\\\/', $type)){
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
      case 'string':
        return is_string($obj)? true : false;
        break;
      case 'integer':
        return is_integer($obj)? true : false;
        break;
      case 'float':
        return is_float($obj)? true : false;
        break;
      case 'array':
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
  
  public function set($item, $value){
    if(array_key_exists($item,$this->attributes)){
      if(isset($this->attributes[$item]['type'])){
        $type = $this->attributes[$item]['type'];
        $subType = isset($this->attributes[$item]['sub_type'])? $this->attributes[$item]['sub_type'] : null;
        if($this->validateType($value, $type, $subType)){
          $this->data[$item] = $value;
        } else {
          throw new \openrtb\exceptions\ValidationException('Item "'.$item.'" failed validation of type "'.$type.'"');
        }
      } else {
        throw new \openrtb\exceptions\ValidationException('Item "'.$item.'" type is not defined in the schema');
      }
    } else {
      throw new \openrtb\exceptions\ValidationException('Item "'.$item.'" is not defined in the schema');
    }
  }
  
  public function get($item){
    return isset($this->data[$item])? $this->data[$item] : null;
  }
  
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
  
  public function getDataAsJson(){
    return json_encode($this->getDataAsArray());
  }
  
}