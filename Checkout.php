<?php

class Checkout{
	public $chat_id;
	public $stage = 1;
	public $order;
	public $costumer;

	public function __construct($chat_id, $user_info){
		$this->chat_id = $chat_id;
		$this->order = [ 'product' => null ];
		$this->user_info = $user_info;
	}

	public function end(){
		$this->stage = 0; 
	}

	public function set_order(array $n){
		$this->order = $n;
	}

	public function set_costumer(Costumer $c){
		$this->costumer = $c;
	}
}

class CheckoutFactory{
	public static $checkouts = array();

	public static function get($cid){
		if(array_key_exists($cid, self::$checkouts)) return self::$checkouts;
	}

	public static function create($chat_id, $user_info){
		$ch = new Checkout($chat_id, $user_info);
		self::$checkouts[$chat_id] = $ch;
		return $ch;
	}

	public static function has($cid){
		return array_key_exists($cid, self::$checkouts);
	}
}