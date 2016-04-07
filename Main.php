<?php
require_once('Operation.php');
require('vendor/autoload.php');
require_once('Costumer.php');
require_once('Checkout.php');

class Main{

	private $telegram;
	private $last_update = 0;
	private $last_offset = 0;
	
	function __construct(){
		$this->telegram = new Telegram\Bot\Api('151568898:AAE9rKOyB6vaxQOUDmnSGlSJNKdMRijV18w');
		$this->telegram->setConnectTimeOut(30);
	}

	private function main(){

		/* Long polling */
		while(true){
			$updates = $this->telegram->getUpdates(['offset' => $last_offset++ ]);
			
			if(count($updates)){
				$last_offset = $updates[count($updates)-1]->getUpdateId();
				$last_update = $updates;

				foreach($last_update as $l){

					$l->getMessage()->getFrom();

				}
			}

			sleep(1);
		}


		$this->filterOp(Operation::getOp($msg));
	}

	private function filterOp($operations){

		$qty = count($operations);
		if($qty == 1){

			$this->doOperation($operations[0]->op, $operations[0]->value);

		}else{

			// TO-DO
			
		}

	}

	private function doOperation($op,$value){

		echo "string $op $value";

		switch ($op) {
			
			case "HELLO":
			break;
			
			case "BUY":
			break;
			
			case "PRODUCT":
			break;
			
			case "FLAVOR":
				
			break;
			
			case "SIZE":
			break;
			
			case "LOCATION":
			break;
			
			case "PAYMENT":
			break;
			
			case "END":
			break;
			
			case "CONFIRM":
			break;
			
			case "CANCEL":
			break;
			
			default:
			break;
		}
	}
}

$main = new Main();