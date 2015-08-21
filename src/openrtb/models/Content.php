<?php
namespace openrtb\models;

class Content extends \openrtb\abstractions\BaseModel {
  
	protected $attributes = array(
		'id' => array (
			'type' => 'string'
		),
		'episode' => array (
			'type' => 'integer'
		),
		'title' => array (
			'type' => 'string'
		),
		'series' => array (
			'type' => 'string'
		),
		'season' => array (
			'type' => 'string'
		),
		'producer' => array (
			'type' => 'openrtb\models\Producer'
		),
		'url' => array (
			'type' => 'string'
		),
		'cat' => array (
			'type' => 'array',
			'sub_type' => 'string'
		),
		'videoquality' => array (
			'type' => 'integer'
		),
		'context' => array (
			'type' => 'integer'
		),
		'contentrating' => array (
			'type' => 'string'
		),
		'userrating' => array (
			'type' => 'string'
		),
		'qagmediarating' => array (
			'type' => 'integer'
		),
		'keywords' => array (
			'type' => 'string'
		),
		'livestream' => array (
			'type' => 'integer'
		),
		'sourcerelationship' => array (
			'type' => 'integer'
		),
		'len' => array (
			'type' => 'integer'
		),
		'language' => array (
			'type' => 'string'
		),
		'embeddable' => array (
			'type' => 'integer'
		),
		'ext' => array (
			'type' => 'openrtb\models\Extension'
		),
	);
  
}