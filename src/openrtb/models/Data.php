<?php
namespace openrtb\models;

class Data extends \openrtb\abstractions\BaseModel {
  
	protected $attributes = array(
		'id' => array (
			'type' => self::ATTR_ID
		),
		'name' => array (
			'type' => self::ATTR_STRING
		),
		'segment' => array (
			'type' => self::ATTR_ARRAY,
			'sub_type' => 'openrtb\models\Segment'
		),
		'ext' => array (
			'type' => 'openrtb\models\Extension'
		),
	);
  
}