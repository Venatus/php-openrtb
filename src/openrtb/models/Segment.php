<?php
namespace openrtb\models;

class Segment extends \openrtb\abstractions\BaseModel {
  
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
      'type' => 'openrtb\models\Extension',
    ),
  );
  
}