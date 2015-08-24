<?php
namespace openrtb\models;

class Content extends \openrtb\abstractions\BaseModel {
  
	protected $attributes = array(
		'id' => array (
			'type' => self::ATTR_ID
		),
		'episode' => array (
			'type' => self::ATTR_INTEGER
		),
		'title' => array (
			'type' => self::ATTR_STRING
		),
		'series' => array (
			'type' => self::ATTR_STRING
		),
		'season' => array (
			'type' => self::ATTR_STRING
		),
		'producer' => array (
			'type' => 'openrtb\models\Producer'
		),
		'url' => array (
			'type' => self::ATTR_STRING
		),
		'cat' => array (
			'type' => self::ATTR_ARRAY,
			'sub_type' => self::ATTR_STRING
		),
		'videoquality' => array (
			'type' => self::ATTR_INTEGER
		),
		'context' => array (
			'type' => self::ATTR_INTEGER
		),
		'contentrating' => array (
			'type' => self::ATTR_STRING
		),
		'userrating' => array (
			'type' => self::ATTR_STRING
		),
		'qagmediarating' => array (
			'type' => self::ATTR_INTEGER
		),
		'keywords' => array (
			'type' => self::ATTR_STRING
		),
		'livestream' => array (
			'type' => self::ATTR_INTEGER
		),
		'sourcerelationship' => array (
			'type' => self::ATTR_INTEGER
		),
		'len' => array (
			'type' => self::ATTR_INTEGER
		),
		'language' => array (
			'type' => self::ATTR_STRING
		),
		'embeddable' => array (
			'type' => self::ATTR_INTEGER
		),
		'ext' => array (
			'type' => 'openrtb\models\Extension'
		),
	);
  
}