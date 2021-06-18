<?php
include("function.php");

$track = $_POST["track"];

$query = "SELECT * FROM `orders` WHERE track = '$track'";
$result = mysqli_query(getConnection(),$query);
while ($row = mysqli_fetch_assoc($result)) {

?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="image/yurt.ico">
    <title>Track</title>
    <link rel="stylesheet" type="text/css" href="css/track.css">
</head>

<body>
	<div class="container">
    <div class="title d-flex">
    	<h1>Track</h1>
      <img src="image/yurt.png" alt="yurt" width="80" height="60" style="filter: brightness(0) invert(1); margin-left:30%;">
      <a class="navbar-brand" href="#" style="font-weight: bold; color: white; text-decoration: none;">PFN</a>
  </div>
  <div class="d-flex">
        <form style="text-align: center;" action="" method="POST">
            <label for="order_id" style="color: black; font-weight: bold" >Order ID: </label>
            <div class="form-group" id="order_id">
                            <?php
                            $order_id = $row['order_id'];
                            echo $order_id; 
                            ?>
            </div>

            <label for="user" style="color: black; font-weight: bold" >User: </label>
            <div class="form-group" id="user">
                            <?php
                            $user_query = "SELECT name, surname FROM users WHERE user_id =".$row['user_id'];
                            $res = mysqli_query(getConnection(),$user_query);
                            while ($r = mysqli_fetch_assoc($res)) {
                            echo $r['name'];
                            echo "  ";
                            echo $r['surname']; 
                            }
                            ?>
            </div>

            <label for="from_address" style="color: black; font-weight: bold">From address: </label>
            <div class="form-group" id="from_address">
                            <?php

                            $from_query = "SELECT address FROM users WHERE user_id =".$row['user_id'];
                            $res_1 = mysqli_query(getConnection(),$from_query);
                            while ($r_1 = mysqli_fetch_assoc($res_1)) {
                            echo $r_1['address']; 
                            }

                            ?>
            </div>

            <label for="to_address" style="color: black; font-weight: bold">To adddress: </label>
            <div class="form-group" id="to_address">
                            <?php echo $row['to_address']; ?>
            </div>

            <label for="to_postcode" style="color: black; font-weight: bold">To Postcode: </label>
            <div class="form-group" id="to_postcode">
                            <?php echo $row['to_postcode']; ?>
            </div>

            <label for="recepient_contact" style="color: black; font-weight: bold">Recepient Contacts: </label>
            <div class="form-group" id="recepient_contact">
                            <?php echo $row['recepient_contact']; ?>
            </div>

            <label for="track" style="color: black; font-weight: bold">Track number: </label>
            <div class="form-group" id="track">
                            <?php echo $row['track']; ?>
            </div>

            <?php
                }
                 $query_1 = "SELECT * FROM 'location' WHERE order_id = '$order_id'";
                 $result_1 = mysqli_query(getConnection(),$query_1);
                 
                 if($result_1) {
                 while ($ro_1 = mysqli_fetch_assoc($result_1)) {
                ?>

                <label for="location" style="color: black; font-style: bold">Point #<?php echo $ro_1['step'] ?>: </label>
                <div class="form-group" id="location">
                            <?php echo $ro_1['place']." ".$ro_1['date']; ?>
                </div>

                <?php 
                  }
                 }
                ?>


            <br>
            <br>
			 <a href="Profile.php" name="go_back" type="submit" class="butt" style="text-decoration: none" ;>Go back</a> 
               

            </div>
            </div>
        </form>
    </div>
</body>
</html>