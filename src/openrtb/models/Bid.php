<?php
namespace openrtb\models;

class Bid extends \openrtb\abstractions\BaseModel {
  
	protected $attributes = array(
		'id' => array(
      		'required' => true,
			'type' => self::ATTR_ID
		),
		'impid' => array(
      		'required' => true,
			'type' => self::ATTR_STRING
		),
		'price' => array(
      		'required' => true,
			'type' => self::ATTR_FLOAT
		),
		'adid' => array(
			'type' => self::ATTR_STRING
		),
		'nurl' => array(
			'type' => self::ATTR_STRING
		),
		'adm' => array(
			'type' => self::ATTR_STRING
		),
		'adomain' => array(
 			'type' =>  self::ATTR_ARRAY,
 			'sub_type' => self::ATTR_STRING
		),
		'bundle' => array(
			'type' => self::ATTR_STRING
		),
		'iurl' => array(
			'type' => self::ATTR_STRING
		),
		'cid' => array(
			'type' => self::ATTR_STRING
		),
		'crid' => array(
			'type' => self::ATTR_STRING
		),
		'cat' => array(
 			'type' =>  self::ATTR_ARRAY,
 			'sub_type' => self::ATTR_STRING
		),
		'attr' => array(
 			'type' =>  self::ATTR_ARRAY,
 			'sub_type' => self::ATTR_INTEGER
		),
		'dealid' => array(
			'type' => self::ATTR_STRING
		),
		'h' => array(
			'type' => self::ATTR_INTEGER
		),
		'w' => array(
			'type' => self::ATTR_INTEGER
		),
 		'ext' => array(
 			'type' =>  'openrtb\models\Extension'
 		),
	);
  
}