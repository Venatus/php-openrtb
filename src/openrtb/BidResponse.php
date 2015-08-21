<?php
namespace openrtb;

class BidResponse extends \openrtb\abstractions\BaseModel {
  
  protected $attributes = array(
    'id' => array(
      'required' => true,
      'type' => 'string',
    ),
    'seatbid' => array(
      'type' => 'openrtb\models\SeatBid',
    ),
    'bidid' => array(
      'type' => 'string',
    ),
    'cur' => array(
      'type' => 'string',
      'default_value' => 'USD',
    ),
    'customdata' => array(
      'type' => 'string',
    ),
    'nbr' => array(
      'type' => 'integer',
    ),
    'ext' => array(
      'type' => 'openrtb\models\Extension',
    ),
  );
  
  public function __constuct($reponse){
    
  }
    
}