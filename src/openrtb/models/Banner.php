<?php
namespace openrtb\models;

class Banner extends \openrtb\abstractions\BaseModel {
  
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
    'wmax' => array(
      'type' => 'integer',
    ),
    'hmax' => array(
      'type' => 'integer',
    ),
    'wmin' => array(
      'type' => 'integer',
    ),
    'hmin' => array(
      'type' => 'integer',
    ),
    'btype' => array(
      'type' => 'array',
      'sub_type' => 'integer',
    ),
    'battr' => array(
      'type' => 'array',
      'sub_type' => 'integer',
    ),
    'pos' => array(
      'type' => 'integer',
    ),
    'mimes' => array(
      'type' => 'array',
      'sub_type' => 'string',
    ),
    'topframe' => array(
      'type' => 'integer',
    ),
    'expdir' => array(
      'type' => 'array',
      'sub_type' => 'integer',
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