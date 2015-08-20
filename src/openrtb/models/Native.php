<?php
namespace openrtb\models;

class Banner {
  
  protected $attributes = array(
    'id' => array(
      'type' => 'string',
    ),
    'request' => array(
      'required' => true,
      'type' => 'string',
    ),
    'ver' => array(
      'type' => 'string',
    ),
    'battr' => array(
      'type' => 'array',
      'sub_type' => 'integer',
    ),
    'api' => array(
      'type' => 'array',
      'sub_type' => 'integer',
    ),
    'ext' => array(
      'type' => 'models/Extension',
    ),
  );
  
}