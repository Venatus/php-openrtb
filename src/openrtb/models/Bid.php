<?php
namespace openrtb\models;

class Bid extends \openrtb\abstractions\BaseModel {
  
	protected $attributes = array(
		'id' => array(
      'required' => true,
			'type' => 'string'
		),
		'impid' => array(
      'required' => true,
			'type' => 'string'
		),
		'price' => array(
      'required' => true,
			'type' => 'float'
		),
		'adid' => array(
			'type' => 'string'
		),
		'nurl' => array(
			'type' => 'string'
		),
		'adm' => array(
			'type' => 'string'
		),
		'adomain' => array(
 			'type' =>  'array',
 			'sub_type' => 'string'
		),
		'bundle' => array(
			'type' => 'string'
		),
		'iurl' => array(
			'type' => 'string'
		),
		'cid' => array(
			'type' => 'string'
		),
		'crid' => array(
			'type' => 'string'
		),
		'cat' => array(
 			'type' =>  'array',
 			'sub_type' => 'string'
		),
		'attr' => array(
 			'type' =>  'array',
 			'sub_type' => 'integer'
		),
		'dealid' => array(
			'type' => 'string'
		),
		'h' => array(
			'type' => 'integer'
		),
		'w' => array(
			'type' => 'integer'
		),
 		'ext' => array(
 			'type' =>  'openrtb\models\Extension'
 		),
	);
  
}