<?php
require('vendor/autoload.php');
require_once('Costumer.php');
require_once('Checkout.php');

$telegram = new Telegram\Bot\Api('token_here');
$telegram->setConnectTimeOut(30); $last_offset = 0; $last_update;


$updates = $telegram->getUpdates();

if(count($updates)){
	$last_offset = $updates[count($updates)-1];
	$last_update = $updates;

	print_r($last_offset->getMessage()->getFrom());
}
