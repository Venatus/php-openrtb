<?php
namespace openrtb\models;

class Segment {
  
  protected $attributes = array(
    'id' => array(
      'type' => 'string',
    ),
    'name' => array(
      'type' => 'string',
    ),
    'value' => array(
      'type' => 'string',
    ),
    'ext' => array(
      'type' => 'models/Extension',
    ),
  );
  
}