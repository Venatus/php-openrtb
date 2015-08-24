<?php
namespace openrtb\models;

class Banner extends \openrtb\abstractions\BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'type' => self::ATTR_ID,
    ),
    'w' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'h' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'wmax' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'hmax' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'wmin' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'hmin' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'btype' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_INTEGER,
    ),
    'battr' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_INTEGER,
    ),
    'pos' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'mimes' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING,
    ),
    'topframe' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'expdir' => array(
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