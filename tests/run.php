<?php
date_default_timezone_set('UTC');
ini_set('default_charset','UTF-8');
mb_internal_encoding('UTF-8');
require_once(__DIR__.'/../vendor/autoload.php');

$bidRequest = new \openrtb\BidRequest();

//$_SERVER['argv'] = array('phpunit','--configuration=conf.xml');
//$_SERVER['argc'] = count($_SERVER['argv']);
//\PHPUnit_TextUI_Command::main();