<?php
namespace openrtb\models;

class Segment extends \openrtb\abstractions\BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'type' => self::ATTR_ID,
    ),
    'name' => array(
      'type' => self::ATTR_STRING,
    ),
    'value' => array(
      'type' => self::ATTR_STRING,
    ),
    'ext' => array(
      'type' => 'openrtb\models\Extension',
    ),
  );
  
}