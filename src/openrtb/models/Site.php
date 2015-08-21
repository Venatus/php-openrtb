<?php
namespace openrtb\models;

class Site extends \openrtb\abstractions\BaseModel {
  
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
      'type' => 'openrtb\models\Publisher',
    ),
    'content' => array(
      'type' => 'openrtb\models\Content',
    ),
    'keywords' => array(
      'type' => 'string',
    ),
    'ext' => array(
      'type' => 'openrtb\models\Extension',
    ),
  );
  
}