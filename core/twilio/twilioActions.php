<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

$GLOBALS['sid'] = 'AC34775909ff9418a33f9d30a362366b23';
$GLOBALS['token'] = 'cd56cf21efa5774b5e2b192927f93a58';

function twilioSMS($number, $message)
{
	$client = new Client($GLOBALS['sid'], $GLOBALS['token']);
	try{
		$client->messages->create(
			$number,
			array(
				'from'=>'Saloon',
				'body' => $message
			)
		);
		
	}catch(Exception $e){
		print_r($e);
	}
}
