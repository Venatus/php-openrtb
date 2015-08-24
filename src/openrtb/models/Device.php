<?php
namespace openrtb\models;

class Device extends \openrtb\abstractions\BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'type' => self::ATTR_ID,
    ),
    'ua' => array(
      'type' => self::ATTR_STRING,
    ),
    'geo' => array(
      'type' => 'openrtb\models\Geo',
    ),
    'dnt' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'lmt' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'ip' => array(
      'type' => self::ATTR_STRING,
    ),
    'ipv6' => array(
      'type' => self::ATTR_STRING,
    ),
    'devicetype' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'make' => array(
      'type' => self::ATTR_STRING,
    ),
    'model' => array(
      'type' => self::ATTR_STRING,
    ),
    'os' => array(
      'type' => self::ATTR_STRING,
    ),
    'osv' => array(
      'type' => self::ATTR_STRING,
    ),
    'hwv' => array(
      'type' => self::ATTR_STRING,
    ),
    'h' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'w' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'ppi' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'pxratio' => array(
      'type' => self::ATTR_FLOAT,
    ),
    'js' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'flashver' => array(
      'type' => self::ATTR_STRING,
    ),
    'language' => array(
      'type' => self::ATTR_STRING,
    ),
    'carrier' => array(
      'type' => self::ATTR_STRING,
    ),
    'connectiontype' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'ifa' => array(
      'type' => self::ATTR_STRING,
    ),
    'didsha1' => array(
      'type' => self::ATTR_STRING,
    ),
    'didmd5' => array(
      'type' => self::ATTR_STRING,
    ),
    'dpidsha1' => array(
      'type' => self::ATTR_STRING,
    ),
    'dpidmd5' => array(
      'type' => self::ATTR_STRING,
    ),
    'macsha1' => array(
      'type' => self::ATTR_STRING,
    ),
    'macmd5' => array(
      'type' => self::ATTR_STRING,
    ),
    'ext' => array(
      'type' => 'openrtb\models\Extension',
    ),
  );
  
}