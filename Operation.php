<?php

class Operation{

	private static $docGot = false;
	private static $json   = null;

	public static function getOp($msg){
		$ret  = array();
		$tmsg = strtolower($msg);

		if(self::$docGot){
			// do nothing
		}else{
			self::getDoc();
		}

		foreach (self::$json as $key => $opObj) {// percorre operacoes

			for ($j=0; $j < count($opObj->keywords); $j++) { // percorre palavras para cada operacao
				$w = $opObj->keywords[$j];
				$d = self::find($tmsg,$w);

				if($d != -1){
					$op = new stdClass();
					$op->op    = $opObj->operation;
					$op->value = $w;
					$op->distance = $d;

					if($d==0){
						return $op;	
					}else{
						array_push($ret, $op);						
					}
				}
			}
		}

		function cmp($a,$b){
			return ($a->distance == $b->distance?0:($a->distance < $b->distance?-1:1));
		}
		usort($ret, "cmp");

		return $ret[0];
	}

	public static function getDoc(){
		self::$json   = file_get_contents("operations.json");
		self::$json   = json_decode(self::$json);
		self::$docGot = true;
	}

	public static function find($msg,$term){
		$ar = explode(" ", $msg);

		foreach ($ar as $key => $value) {
			$cond = levenshtein($value, $term);
			if($cond > -1 && $cond <= 2){
				return $cond;
			}
		}
		return -1;
	}
}

var_dump(Operation::getOp('quanta'));