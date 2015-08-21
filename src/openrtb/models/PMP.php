<?php
namespace openrtb\models;

class PMP extends \openrtb\abstractions\BaseModel {
  
	protected $attributes = array(
		'private_auction' => array(
			'type' => 'integer'
		),
		'deals' => array(
			'type' => 'array',
			'sub_type' => 'openrtb\models\Deal'
		),
		'ext' => array(
			'type' => 'openrtb\models\Extension'
		)
	);
  
}