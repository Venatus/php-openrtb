<?php
define('BIDDER_URL', 'http://bidder.alchemy.dev/');

date_default_timezone_set('UTC');
ini_set('default_charset','UTF-8');
mb_internal_encoding('UTF-8');
require_once(__DIR__.'/../vendor/autoload.php');

function addDelay() {
	$delay = rand(10, 2000) * 1000; //Between 10ms and 2000ms, in microseconds for usleep()
	usleep($delay);
}

//Get BidRequest
try {
	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		$jsonData = file_get_contents('php://input');
	} else {
		$jsonData = file_get_contents(__DIR__.'/example_requests/sticky_ads_example_2.txt');
	}
	$bidRequest = new \openrtb\BidRequest();
	$bidRequest->hydrate($jsonData);
} catch(\Exception $e) {
	var_dump($e->getMessage());
}


addDelay();

//Get impression(s) info
$imp = $bidRequest->get('imp');
$noImp = !isset($imp[0]);

//Constructing BidResponse
$bidResponse = new \openrtb\BidResponse();
$bidResponse->set('id', $bidRequest->get('id'));

//Randomly generate a no bid response for 0.5% of BidRequests
if(rand(1, 200) === 1 || $noImp) {
	$bidResponse->set('seatbid', []);
	$nbr = ($noImp)? 2 : rand(0, 8);
	$bidResponse->set('nbr', $nbr);
} else {
	$bidResponse->set('bidid', sha1(uniqid())); //Unique BidID for this BidResponse

	//Generate 1 or 2 SeatBid
	$bidders = [
		'42',
		'69'
	];
	$numSeatBid = rand(1, 2);
	$seats = [];

	for($i = 1; $i <= $numSeatBid; $i++) {
		$seatBid = new \openrtb\models\SeatBid();
		$seatBid->set('seat', $bidders[$i]);

		$bidId = sha1(uniqid());

		$bid = new \openrtb\models\Bid();
		$bid->set('id', $bidId);
		$bid->set('impid', $imp[0]->get('id'));

		//Generate random price
		$priceInCents = rand(10, 400);
		$floatPrice = $priceInCents / 100;
		$bid->set('price', $floatPrice);
		$bid->set('nurl', BIDDER_URL . 'win/' . $bidId);
		$bid->set('adm', file_get_contents(__DIR__ . '/vast_tags/tag_' . $i . '.xml'));

		$seatBid->set('bid', [$bid]);
		$seats[] = $seatBid;
	}

	$bidResponse->set('seatbid', $seats);
}
header('Content-Type: application/json');
echo $bidResponse->getDataAsJson();