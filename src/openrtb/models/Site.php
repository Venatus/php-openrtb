<?php
namespace openrtb\models;

class Site {
  
  protected $attributes = array(
    'id' => array(
      'type' => 'string',
    ),
    'name' => array(
      'type' => 'string',
    ),
    'domain' => array(
      'type' => 'string',
    ),
    'cat' => array(
      'type' => 'array',
      'sub_type' => 'string',
    ),
    'sectioncat' => array(
      'type' => 'array',
      'sub_type' => 'string',
    ),
    'pagecat' => array(
      'type' => 'array',
      'sub_type' => 'string',
    ),
    'page' => array(
      'type' => 'string',
    ),
    'ref' => array(
      'type' => 'string',
    ),
    'search' => array(
      'type' => 'string',
    ),
    'mobile' => array(
      'type' => 'integer',
    ),
    'privacypolicy' => array(
      'type' => 'integer',
    ),
    'publisher' => array(
      'type' => 'models/Publisher',
    ),
    'content' => array(
      'type' => 'models/Content',
    ),
    'keywords' => array(
      'type' => 'string',
    ),
    'ext' => array(
      'type' => 'models/Extension',
    ),
  );
  
}