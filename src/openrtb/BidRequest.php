<?php
namespace openrtb;

class BidRequest extends \openrtb\abstractions\BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'required' => true,
      'type' => 'string',
    ),
    'imp' => array(
      'required' => true,
      'type' => 'openrtb\models\Impression',
    ),
    'app' => array(
      'type' => 'openrtb\models\App',
    ),
    'device' => array(
      'type' => 'openrtb\models\Device',
    ),
    'user' => array(
      'type' => 'openrtb\models\User',
    ),
    'test' => array(
      'type' => 'integer',
      'default_value' => 0,
    ),
    'at' => array(
      'type' => 'integer',
      'default_value' => 2,
    ),
    'tmax' => array(
      'type' => 'integer',
    ),
    'wseat' => array(
      'type' => 'array',
      'sub_type' => 'string',
    ),
    'allimps' => array(
      'type' => 'integer',
      'default_value' => 0,
    ),
    'cur' => array(
      'type' => 'openrtb\models\Currency',
    ),
    'bcat' => array(
      'type' => 'array',
      'sub_type' => 'string',
    ),
    'badv' => array(
      'type' => 'array',
      'sub_type' => 'string',
    ),
    'regs' => array(
      'type' => 'openrtb\models\Regulation',
    ),
    'ext' => array(
      'type' => 'openrtb\models\Extension',
    ),
  );
  
}