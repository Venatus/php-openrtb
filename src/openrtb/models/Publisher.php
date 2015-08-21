<?php
namespace openrtb\models;

class Publisher extends \openrtb\abstractions\BaseModel {
  
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
			'type' => 'openrtb\models\Extension'
		),
	);
  
}