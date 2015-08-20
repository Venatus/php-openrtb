<?php
namespace openrtb\models;

class Device {
  
  protected $attributes = array(
    'id' => array(
      'type' => 'string',
    ),
    'ua' => array(
      'type' => 'string',
    ),
    'geo' => array(
      'type' => 'models/Geo',
    ),
    'dnt' => array(
      'type' => 'integer',
    ),
    'lmt' => array(
      'type' => 'integer',
    ),
    'ip' => array(
      'type' => 'string',
    ),
    'ipv6' => array(
      'type' => 'string',
    ),
    'devicetype' => array(
      'type' => 'integer',
    ),
    'make' => array(
      'type' => 'string',
    ),
    'model' => array(
      'type' => 'string',
    ),
    'os' => array(
      'type' => 'string',
    ),
    'osv' => array(
      'type' => 'string',
    ),
    'hwv' => array(
      'type' => 'string',
    ),
    'h' => array(
      'type' => 'integer',
    ),
    'w' => array(
      'type' => 'integer',
    ),
    'ppi' => array(
      'type' => 'integer',
    ),
    'pxratio' => array(
      'type' => 'float',
    ),
    'js' => array(
      'type' => 'integer',
    ),
    'flashver' => array(
      'type' => 'string',
    ),
    'language' => array(
      'type' => 'string',
    ),
    'carrier' => array(
      'type' => 'string',
    ),
    'connectiontype' => array(
      'type' => 'integer',
    ),
    'ifa' => array(
      'type' => 'string',
    ),
    'didsha1' => array(
      'type' => 'string',
    ),
    'didmd5' => array(
      'type' => 'string',
    ),
    'dpidsha1' => array(
      'type' => 'string',
    ),
    'dpidmd5' => array(
      'type' => 'string',
    ),
    'macsha1' => array(
      'type' => 'string',
    ),
    'macmd5' => array(
      'type' => 'string',
    ),
    'ext' => array(
      'type' => 'models/Extension',
    ),
  );
  
}