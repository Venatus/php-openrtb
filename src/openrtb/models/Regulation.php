<?php
namespace openrtb\models;

class Regulation {
  
  protected $attributes = array(
    'id' => array(
      'type' => 'string',
    ),
    'coppa' => array(
      'type' => 'integer',
    ),
    'ext' => array(
      'type' => 'models/Extension',
    ),
  );
  
}