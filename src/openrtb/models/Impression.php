<?php
namespace openrtb\models;

class Impression extends \openrtb\abstractions\BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'required' => true,
      'type' => 'string',
    ),
    'banner' => array(
      'type' => 'openrtb\models\Banner',
    ),
    'video' => array(
      'type' => 'openrtb\models\Video',
    ),
    'native' => array(
      'type' => 'openrtb\models\Video',
    ),
    'displaymanager' => array(
      'type' => 'string',
    ),
    'displaymanagerver' => array(
      'type' => 'string',
    ),
    'instl' => array(
      'type' => 'integer',
      'default_value' => 0,
    ),
    'tagid' => array(
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
    'secure' => array(
      'type' => 'integer',
    ),
    'iframebuster' => array(
      'type' => 'array',
      'sub_type' => 'string',
    ),
    'pmp' => array(
      'type' => 'openrtb\models\PMP',
    ),
    'ext' => array(
      'type' => 'openrtb\models\Extension',
    ),
  );
  
}