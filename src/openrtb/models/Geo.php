<?php
namespace openrtb\models;

class Geo extends \openrtb\abstractions\BaseModel {
  
	protected $attributes = array(
		'lat' => array (
			'type' => 'float'
		),
		'lon' => array (
			'type' => 'float'
		),
		'type' => array (
			'type' => 'integer'
		),
		'country' => array (
			'type' => 'string'
		),
		'region' => array (
			'type' => 'string'
		),
		'regionfips104' => array (
			'type' => 'string'
		),
		'metro' => array (
			'type' => 'string'
		),
		'city' => array (
			'type' => 'string'
		),
		'zip' => array (
			'type' => 'string'
		),
		'utcoffset' => array (
			'type' => 'integer'
		),
		'ext' => array (
			'type' => 'openrtb\models\Extension'
		),
	);
  
}