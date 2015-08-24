<?php
namespace openrtb\models;

class Site extends \openrtb\abstractions\BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'type' => self::ATTR_ID,
    ),
    'name' => array(
      'type' => self::ATTR_STRING,
    ),
    'domain' => array(
      'type' => self::ATTR_STRING,
    ),
    'cat' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING,
    ),
    'sectioncat' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING,
    ),
    'pagecat' => array(
      'type' => self::ATTR_ARRAY,
      'sub_type' => self::ATTR_STRING,
    ),
    'page' => array(
      'type' => self::ATTR_STRING,
    ),
    'ref' => array(
      'type' => self::ATTR_STRING,
    ),
    'search' => array(
      'type' => self::ATTR_STRING,
    ),
    'mobile' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'privacypolicy' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'publisher' => array(
      'type' => 'openrtb\models\Publisher',
    ),
    'content' => array(
      'type' => 'openrtb\models\Content',
    ),
    'keywords' => array(
      'type' => self::ATTR_STRING,
    ),
    'ext' => array(
      'type' => 'openrtb\models\Extension',
    ),
  );
  
}