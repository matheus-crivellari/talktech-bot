<?php 

	function debug($value) {
		print_r($value);
		echo "\n";
		exit;
	}

	final class DataBase {

		static $users = [
			151670208 => [
				'first_name' 	=> 'Luis',
				'last_name' 	=> 'Fedrizze', 
				],

			195635733 => [
				'first_name' 	=> 'Matheus',
				'last_name' 	=> 'Nunes', 
				],

			199412224 => [
				'first_name' 	=> 'Matheus',
				'last_name' 	=> 'Crivellari', 
				],

			193462614 => [
				'first_name' 	=> 'Cleyton',
				'last_name' 	=> 'Simpson', 
				],
		];

		static $orders = [

			234092456 => [
				'user_id' 			=> 151670208,
				'establishment' 	=> 23476,
				'date' 				=> 1458409894,
				'product_type'		=> 1,
				'confirmed'			=> 1,
				'flavor'			=> 1,
			],

			234092457 => [
				'user_id' 			=> 195635733,
				'establishment' 	=> 23476,
				'date' 				=> 1458409894,
				'product_type'		=> 1,
				'confirmed'			=> 1,
				'flavor'			=> 1,
			],

			234092458 => [
				'user_id' 			=> 151670208,
				'establishment' 	=> 23476,
				'date' 				=> 1458409894,
				'product_type'		=> 1,
				'confirmed'			=> 1,
				'flavor'			=> 2,
			],

			234092459 => [
				'user_id' 			=> 199412224,
				'establishment' 	=> 23476,
				'date' 				=> 1458409894,
				'product_type'		=> 1,
				'confirmed'			=> 1,
				'flavor'			=> 3,
			],

			234092460 => [
				'user_id' 			=> 199412224,
				'establishment' 	=> 23476,
				'date' 				=> 1458409894,
				'product_type'		=> 1,
				'confirmed'			=> 1,
				'flavor'			=> 4,
			],

			234092461 => [
				'user_id' 			=> 151670208,
				'establishment' 	=> 23476,
				'date' 				=> 1458409894,
				'product_type'		=> 1,
				'confirmed'			=> 1,
				'flavor'			=> 1,
			],

			234092462 => [
				'user_id' 			=> 195635733,
				'establishment' 	=> 23476,
				'date' 				=> 1458409894,
				'product_type'		=> 1,
				'confirmed'			=> 1,
				'flavor'			=> 1,
			],

			234092463 => [
				'user_id' 			=> 195635733,
				'establishment' 	=> 23456,
				'date' 				=> 1458409894,
				'product_type'		=> 1,
				'confirmed'			=> 1,
				'flavor'			=> 2,
			],

			234092464 => [
				'user_id' 			=> 199412224,
				'establishment' 	=> 23476,
				'date' 				=> 1458409894,
				'product_type'		=> 1,
				'confirmed'			=> 1,
				'flavor'			=> 1,
			],

			234092465 => [
				'user_id' 			=> 199412224,
				'establishment' 	=> 23476,
				'date' 				=> 1458409894,
				'product_type'		=> 1,
				'confirmed'			=> 1,
				'flavor'			=> 5,
			],

			234092466 => [
				'user_id' 			=> 199412224,
				'establishment' 	=> 23457,
				'date' 				=> 1458409894,
				'product_type'		=> 1,
				'confirmed'			=> 1,
				'flavor'			=> 1,
			],

			234092467 => [
				'establishment' 	=> 23476,
				'date' 				=> 1458409894,
				'product_type'		=> 1,
				'confirmed'			=> 1,
				'flavor'			=> 1,
			],

			234092468 => [
				'user_id' 			=> 195635733,
				'establishment' 	=> 23456,
				'date' 				=> 1458409894,
				'product_type'		=> 1,
				'confirmed'			=> 1,
				'flavor'			=> 2,
			],

			234092469 => [
				'user_id' 			=> 151670208,
				'establishment' 	=> 23476,
				'date' 				=> 1458409894,
				'product_type'		=> 1,
				'confirmed'			=> 1,
				'flavor'			=> 2,
			],

			234092471 => [
				'user_id' 			=> 195635733,
				'establishment' 	=> 23457,
				'date' 				=> 1458409894,
				'product_type'		=> 1,
				'confirmed'			=> 1,
				'flavor'			=> 2,
			],

			234092471 => [
				'user_id' 			=> 193462614,
				'establishment' 	=> 23476,
				'date' 				=> 1458409894,
				'product_type'		=> 1,
				'confirmed'			=> 1,
				'flavor'			=> 2,
			],

			234092471 => [
				'user_id' 			=> 193462614,
				'establishment' 	=> 23456,
				'date' 				=> 1458409894,
				'product_type'		=> 2,
				'confirmed'			=> 1,
				'flavor'			=> 2,
			],

			234092471 => [
				'user_id' 			=> 193462614,
				'establishment' 	=> 23476,
				'date' 				=> 1458409894,
				'product_type'		=> 1,
				'confirmed'			=> 1,
				'flavor'			=> 2,
			],

			234092471 => [
				'user_id' 			=> 193462614,
				'establishment' 	=> 23476,
				'date' 				=> 1458409894,
				'product_type'		=> 2,
				'confirmed'			=> 1,
				'flavor'			=> 2,
			],

		];

		static $establishment = [
			23476 => [
				'name' 					=> 'Pizzaria Bella Pizza',
				'address' 				=> 'Rua dos bobos, n 0 - Terra do Nunca',
				'average_delivery_time' => 30
			],

			23456 => [
				'name' 					=> 'Pizzaria Bona Massa',
				'address' 				=> 'Rua dos bobos, n 30 - Terra do Nunca',
				'average_delivery_time' => 45
			],

			23457 => [
				'name' 					=> 'Pizzaria Jud Ite',
				'address' 				=> 'Rua dos bobos, n 666 - Terra do Nunca',
				'average_delivery_time' => 40
			],
		];

		static $products = [
			1 => 'Pizza',
			2 => 'Lanche',
			3 => 'Misto quente',
			4 => 'Esfiha',
		];

		static $flavors = [
			1 => 'Calabresa',
			2 => 'Marguerita',
			3 => 'Peito de peru',
			4 => 'Portuguesa',
			5 => 'Americana',
		];

		public static function buildArray( )
		{
			$db = [];

			foreach (DataBase::$orders as $key => $value) {
				$db[$key]['user_id'] 		= DataBase::$users[$value['user_id']];
				$db[$key]['establishment'] 	= DataBase::$establishment[$value['establishment']]['nome'];
				$db[$key]['date'] 			= $value['date'];
				$db[$key]['product_type']	= DataBase::$products[$value['product_type']];
				$db[$key]['confirmed']		= $value['confirmed'];
				$db[$key]['flavor']			= DataBase::$flavors[$value['flavor']];
			}

			return $db;
		}

		public static function getFavoritePizzasPerClient($clientID){
			$temp = [];
			$clientOrders = [];

			foreach (DataBase::$orders as $orderID => $order) {
				if($order['user_id'] == $clientID){
					$temp[ $order['flavor'] ] += 1;
				}
			}

			arsort($temp); 

			foreach ($temp as $key => $value) {
				$clientOrders[$key] = DataBase::$flavors[$key];
			}
			$clientOrders = array_filter($clientOrders);

			return array_slice($clientOrders, 0, 5, true);
		}

		public static function getFavoritePizzas( $howMany = 3 ){
			$temp = [];
			$pizzas = [];

			foreach (DataBase::$orders as $orderID => $order) {
				$temp[ $order['flavor'] ] += 1;
			}


			arsort($temp); 
			foreach ($temp as $key => $value) {
				$pizzas[$key] = DataBase::$flavors[$key];
			}
			$pizzas = array_filter($pizzas);

			return array_slice($pizzas, 0, 3, true);
		}

		public static function getUserByChatID($chatID){
			return DataBase::$users[$chatID];
		}

		public static function getUserIdByName($name){
			foreach (DataBase::$users as $userID => $user) {
				if($name == $user['first_name'].' '.$user['last_name']){
					return $userID;
				}
			}
		}

		public static function getUserNameByChatID($chatID, $full = false){
			if( $full )
				return DataBase::$users[$chatID]['first_name'].' '.DataBase::$users[$chatID]['last_name'];
			else
				return DataBase::$users[$chatID]['first_name'];
		}

		public static function getEstablishments() {
			return DataBase::$establishment;
		}

		public static function getEstablishmentNameByID($establishmentID) {
			return DataBase::$establishment[$establishmentID]['name'];
		}

		public static function getEstablishmentNameDeliveryByID($establishmentID) {
			return DataBase::$establishment[$establishmentID]['name']. ' (' .DataBase::$establishment[$establishmentID]['name'].'m)';
		}

		public static function getFlavors() {
			return DataBase::$flavors;
		}

		public static function getProducts(){
			return DataBase::$products;
		}

		public static function getProductByID($id){
			return DataBase::$products[$id];
		}



	}

	// DataBase::getFavoritePizzas();
	// debug( DataBase::getFavoritePizzasPerClient(195635733) );
	debug( DataBase::getUserIdByName('Matheus Nunes') );

 ?>
