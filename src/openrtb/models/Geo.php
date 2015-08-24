<?php
namespace openrtb\models;

class Geo extends \openrtb\abstractions\BaseModel {
  
	protected $attributes = array(
		'lat' => array (
			'type' => self::ATTR_FLOAT
		),
		'lon' => array (
			'type' => self::ATTR_FLOAT
		),
		'type' => array (
			'type' => self::ATTR_INTEGER
		),
		'country' => array (
			'type' => self::ATTR_STRING
		),
		'region' => array (
			'type' => self::ATTR_STRING
		),
		'regionfips104' => array (
			'type' => self::ATTR_STRING
		),
		'metro' => array (
			'type' => self::ATTR_STRING
		),
		'city' => array (
			'type' => self::ATTR_STRING
		),
		'zip' => array (
			'type' => self::ATTR_STRING
		),
		'utcoffset' => array (
			'type' => self::ATTR_INTEGER
		),
		'ext' => array (
			'type' => 'openrtb\models\Extension'
		),
	);
  
}