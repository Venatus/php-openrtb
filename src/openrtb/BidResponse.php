<?php
namespace openrtb;

class BidResponse extends \openrtb\abstractions\ParentModel {
  
  protected $attributes = array(
    'id' => array(
      'required' => true,
      'type' => self::ATTR_ID,
    ),
    'seatbid' => array(
      'type' => 'openrtb\models\SeatBid',
    ),
    'bidid' => array(
      'type' => self::ATTR_STRING,
    ),
    'cur' => array(
      'type' => self::ATTR_STRING,
      'default_value' => 'USD',
    ),
    'customdata' => array(
      'type' => self::ATTR_STRING,
    ),
    'nbr' => array(
      'type' => self::ATTR_INTEGER,
    ),
    'ext' => array(
      'type' => 'openrtb\models\Extension',
    ),
  );
  
  public function __constuct($reponse){
    
  }
    
}