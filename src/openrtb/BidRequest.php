<?php
namespace openrtb;

class BidRequest extends \openrtb\abstractions\BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'required' => true,
      'type' => self::ATTR_ID,
    ),
    'imp' => array(
      'required' => true,
      'type' => self::ATTR_ARRAY,
      'sub_type' => 'openrtb\models\Impression'
    ),
    'app' => array(
      'type' => 'openrtb\models\App',
    ),
    'device' => array(
      'type' => 'openrtb\models\Device',
    ),
    'user' => array(
      'type' => 'openrtb\models\User',
    ),
    'test' => array(
      'type' => self::ATTR_INTEGER,
      'default_value' => 0,
    ),
    'at' => array(
      'type' => self::ATTR_INTEGER,
      'default_value' => 2,
    ),
    'tmax' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'wseat' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING,
    ),
    'allimps' => array(
      'type' => self::ATTR_INTEGER,
      'default_value' => 0,
    ),
    'cur' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING
    ),
    'bcat' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING,
    ),
    'badv' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING,
    ),
    'regs' => array(
      'type' => 'openrtb\models\Regulation',
    ),
    'ext' => array(
      'type' => 'openrtb\models\Extension',
    ),
  );
  
}