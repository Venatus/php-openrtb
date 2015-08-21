<?php
date_default_timezone_set('UTC');
ini_set('default_charset','UTF-8');
mb_internal_encoding('UTF-8');
require_once(__DIR__.'/../vendor/autoload.php');



$bidResponse = new \openrtb\BidResponse();
$bidResponse->set('id','ABC123');
$bid = new \openrtb\models\Bid();
$bid->set('id','ABC123');
$bid->set('impid','ABC123');
$bid->set('price',1.2);
$seatBid = new \openrtb\models\SeatBid();
$seatBid->set('bid',array(
  $bid
));
$bidResponse->set('seatbid',$seatBid);
var_dump($bidResponse->getDataAsJson());


//$_SERVER['argv'] = array('phpunit','--configuration=conf.xml');
//$_SERVER['argc'] = count($_SERVER['argv']);
//\PHPUnit_TextUI_Command::main();