<?php
namespace openrtb\models;

class SeatBid extends \openrtb\abstractions\BaseModel {
  
	protected $attributes = array(
		'bid' => array(
			'type' => 'array',
			'sub_type' => 'openrtb\models\Bid',
			'required' => true
		),
		'seat' => array(
			'type' => 'string'
		),
		'group' => array(
			'type' => 'integer',
			'default_value' => 0
		),
		'ext' => array(
			'type' => 'openrtb\models\Extension'
		)
	);

}