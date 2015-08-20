<?php
namespace openrtb;

class App {
	protected $attributes = array(
		'id' => array(
			'type' = 'string'
		),
		'name' => array(
			'type' => 'string'
		),
		'bundle' => array(
			'type' => 'string'
 		),
 		'domain' => array (
 			'type' => 'string'
 		),
 		'storeurl' => array(
 			'type' =>  'string'
 		),
 		'cat' => array(
 			'type' =>  'array',
 			'sub_type' => 'string'
 		),
 		'sectioncat' => array(
 			'type' =>  'array',
 			'sub_type' => 'string'
 		),
 		'pagecat' => array(
 			'type' =>  'array',
 			'sub_type' => 'string'
 		),
 		'ver' => array(
 			'type' =>  'string'
 		),
 		'privacypolicy' => array(
 			'type' =>  'integer'
 		),
 		'paid' => array(
 			'type' =>  'integer'
 		),
 		'publisher' => array(
 			'type' =>  'models/Publisher'
 		),
 		'content' => array(
 			'type' =>  'models/Content'
 		),
 		'keywords' => array(
 			'type' =>  'string'
 		),
 		'ext' => array(
 			'type' =>  'models/Extension'
 		)
	);
}