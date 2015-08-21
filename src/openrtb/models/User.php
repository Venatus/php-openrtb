<?php
namespace openrtb\models;

class User extends \openrtb\abstractions\BaseModel {
  
	protected $attributes = array(
		'id' => array (
			'type' => 'string'
		),
		'buyeruid' => array (
			'type' => 'string'
		),
		'yob' => array (
			'type' => 'integer'
		),
		'gender' => array (
			'type' => 'string'
		),
		'keywords' => array (
			'type' => 'string'
		),
		'customdata' => array (
			'type' => 'string'
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