<?php
namespace openrtb\models;

class Regulation extends \openrtb\abstractions\BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'type' => 'string',
    ),
    'coppa' => array(
      'type' => 'integer',
    ),
    'ext' => array(
      'type' => 'openrtb\models\Extension',
    ),
  );
  
}