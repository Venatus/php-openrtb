<?php
namespace openrtb\models;

class Video extends \openrtb\abstractions\BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'type' => 'string',
    ),
    'w' => array(
      'type' => 'integer',
    ),
    'h' => array(
      'type' => 'integer',
    ),
    'mimes' => array(
      'required' => true,
      'type' => 'array',
      'sub_type' => 'string',
    ),
    'minduration' => array(
      'type' => 'integer',
    ),
    'maxduration' => array(
      'type' => 'integer',
    ),
    'protocol' => array(
      'type' => 'integer',
    ),
    'protocols' => array(
      'type' => 'array',
      'sub_type' => 'integer',
    ),
    'startdelay' => array(
      'type' => 'integer',
    ),
    'linearity' => array(
      'type' => 'integer',
    ),
    'sequence' => array(
      'type' => 'integer',
    ),
    'battr' => array(
      'type' => 'array',
      'sub_type' => 'integer',
    ),
    'maxextended' => array(
      'type' => 'integer',
    ),
    'minbitrate' => array(
      'type' => 'integer',
    ),
    'maxbitrate' => array(
      'type' => 'integer',
    ),
    'boxingallowed' => array(
      'type' => 'integer',
      'default_value' => 1,
    ),
    'playbackmethod' => array(
      'type' => 'array',
      'sub_type' => 'integer',
    ),
    'delivery' => array(
      'type' => 'array',
      'sub_type' => 'integer',
    ),
    'pos' => array(
      'type' => 'integer',
    ),
    'companionad' => array(
      'type' => 'array',
      'sub_type' => 'openrtb\models\Banner',
    ),
    'companiontype' => array(
      'type' => 'array',
      'sub_type' => 'openrtb\models\Banner',
    ),
    'api' => array(
      'type' => 'array',
      'sub_type' => 'integer',
    ),
    'ext' => array(
      'type' => 'openrtb\models\Extension',
    ),
  );
  
}