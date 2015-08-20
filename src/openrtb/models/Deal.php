<?php
namespace openrtb\models;

class Deal {
  
  protected $attributes = array(
    'id' => array(
      'required' => true,
      'type' => 'string',
    ),
    'bidfloor' => array(
      'type' => 'float',
      'default_value' => 0,
    ),
    'bidfloorcur' => array(
      'type' => 'string',
      'default_value' => 'USD',
    ),
    'at' => array(
      'type' => 'integer',
    ),
    'wseat' => array(
      'type' => 'array',
      'sub_type' => 'string',
    ),
    'wadomain' => array(
      'type' => 'array',
      'sub_type' => 'string',
    ),
    'ext' => array(
      'type' => 'models/Extension',
    ),
  );
  
}