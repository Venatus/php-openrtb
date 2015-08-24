<?php
namespace openrtb\models;

class Producer extends \openrtb\abstractions\BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'type' => self::ATTR_ID,
    ),
    'name' => array(
      'type' => self::ATTR_STRING,
    ),
    'cat' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING,
    ),
    'domain' => array(
      'type' => self::ATTR_STRING,
    ),
    'ext' => array(
      'type' => 'openrtb\models\Extension',
    ),
  );
  
}