<?php
namespace openrtb\models;

class PMP extends \openrtb\abstractions\BaseModel {
  
	protected $attributes = array(
		'private_auction' => array(
			'type' => self::ATTR_INTEGER
		),
		'deals' => array(
			'type' => self::ATTR_ARRAY,
			'sub_type' => 'openrtb\models\Deal'
		),
		'ext' => array(
			'type' => 'openrtb\models\Extension'
		)
	);
  
}