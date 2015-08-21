<?php
namespace openrtb\models;

class Publisher {
  
	protected $attributes = array(
		'id' => array (
			'type' => 'string'
		),
		'name' => array (
			'type' => 'string'
		),
		'cat' => array (
			'type' => 'array',
			'sub_type' => 'string'
		),
		'domain' => array (
			'type' => 'string'
		),
		'ext' => array (
			'type' => 'models/Extension'
		),
	);
  
}