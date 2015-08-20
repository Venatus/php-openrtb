<?php
namespace openrtb;

class BidRequest {
  
  protected $attributes = array(
    'id' => array(
      'required' => true,
      'type' => 'string',
    ),
    'imp' => array(
      'required' => true,
      'type' => 'models/Impression',
    ),
    'app' => array(
      'type' => 'models/App',
    ),
    'device' => array(
      'type' => 'models/Device',
    ),
    'user' => array(
      'type' => 'models/User',
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
      'type' => 'models/Currency',
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
      'type' => 'models/Regulation',
    ),
    'ext' => array(
      'type' => 'models/Extension',
    ),
  );
  
}