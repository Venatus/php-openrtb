<?php
namespace openrtb;

class SeatBid {
	protected $attributes = array(
		'bid' => array(
			'type' => 'array',
			'sub_type' => 'models/Bid',
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
			'type' => 'models/Extension'
		)
	);
}