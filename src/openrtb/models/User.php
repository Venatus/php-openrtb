<?php
namespace openrtb\models;

class User extends \openrtb\abstractions\BaseModel {
  
	protected $attributes = array(
		'id' => array (
			'type' => self::ATTR_ID
		),
		'buyeruid' => array (
			'type' => self::ATTR_STRING
		),
		'yob' => array (
			'type' => self::ATTR_INTEGER
		),
		'gender' => array (
			'type' => self::ATTR_STRING
		),
		'keywords' => array (
			'type' => self::ATTR_STRING
		),
		'customdata' => array (
			'type' => self::ATTR_STRING
		),
		'geo' => array (
			'type' => 'openrtb\models\Geo'
		),
		'data' => array (
			'type' => 'openrtb\models\Data'
		),
		'ext' => array (
			'type' => 'openrtb\models\Extension'
		),
	);
  
}