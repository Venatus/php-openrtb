<?php
namespace openrtb\models;

class Banner extends \openrtb\abstractions\BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'type' => self::ATTR_ID,
    ),
    'request' => array(
      'required' => true,
      'type' => self::ATTR_STRING,
    ),
    'ver' => array(
      'type' => self::ATTR_STRING,
    ),
    'battr' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_INTEGER,
    ),
    'api' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_INTEGER,
    ),
    'ext' => array(
      'type' => 'openrtb\models\Extension',
    ),
  );
  
}