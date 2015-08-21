<?php
namespace openrtb\models;

class Data extends \openrtb\abstractions\BaseModel {
  
	protected $attributes = array(
		'id' => array (
			'type' => 'string'
		),
		'name' => array (
			'type' => 'string'
		),
		'segment' => array (
			'type' => 'array',
			'sub_type' => 'openrtb\models\Segment'
		),
		'ext' => array (
			'type' => 'openrtb\models\Extension'
		),
	);
  
}