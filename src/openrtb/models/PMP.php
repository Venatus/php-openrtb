<?php
namespace openrtb\models;

class PMP {
  
	protected $attributes = array(
		'private_auction' => array(
			'type' => 'integer'
		),
		'deals' => array(
			'type' => 'array',
			'sub_type' => 'models/Deal'
		),
		'ext' => array(
			'type' => 'models/Extension'
		)
	);
  
}