<?php
namespace openrtb\models;

class User {
  
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
			'type' => 'models/Geo'
		),
		'data' => array (
			'type' => 'models/Data'
		),
		'ext' => array (
			'type' => 'models/Extension'
		),
	);
  
}