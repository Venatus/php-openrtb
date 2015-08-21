<?php
namespace openrtb\models;

class Data {
  
	protected $attributes = array(
		'id' => array (
			'type' => 'string'
		),
		'name' => array (
			'type' => 'string'
		),
		'segment' => array (
			'type' => 'array',
			'sub_type' => 'models/Segment'
		),
		'ext' => array (
			'type' => 'models/Extension'
		),
	);
  
}