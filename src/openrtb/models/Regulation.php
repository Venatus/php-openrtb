<?php
namespace openrtb\models;

class Regulation extends \openrtb\abstractions\BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'type' => self::ATTR_ID,
    ),
    'coppa' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'ext' => array(
      'type' => 'openrtb\models\Extension',
    ),
  );
  
}