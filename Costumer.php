<?php

class Costumer{
	public $name;
	public $street;
	public $favorite = [];

	public function __construct($name, $street = null){
		$this->name = $name;
		$this->street = $street;
	}
}