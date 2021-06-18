<?php

function getConnection() {
$host = "localhost";
$db = "post_for_nomad";
$user = "root";
$password = "";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
return $conn;
}


	function insert_order($to_address,$to_postcode,$weight,$size,$recepient_contact,$track,$cost,$user_id) {

		$query = "INSERT INTO orders (to_address,to_postcode,weight,size,recepient_contact,track,cost,user_id) VALUES('$to_address','$to_postcode','$weight','$size','$recepient_contact','$track','$cost','$user_id')";

		$result = mysqli_query(getConnection(),$query);
		return $result;
	}

	function select_order_to_address(){
		$get_to_address = "SELECT to_address FROM orders WHERE track = ".$_COOKIE['track'];
		$result = mysqli_query(getConnection(),$get_to_address);
		return $result;
	}

	function select_track(){
		$get_track = "SELECT track FROM orders WHERE track = '$track'";
		$result = mysqli_query(getConnection(),$get_track);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function select_cost(){
		$get_cost = "SELECT cost FROM orders WHERE track = '$track'";
		$result = mysqli_query(getConnection(),$get_cost);
		return $result;
	}
?>