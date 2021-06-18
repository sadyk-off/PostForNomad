<?php 
session_start();
include('db.php');
$username=$_POST['username'];
$result = mysqli_query($con,"SELECT * FROM users WHERE username='$username'");
$num_rows = mysqli_num_rows($result);
if ($num_rows) {
 header("location: Registration.php?remarks=failed"); 
}else {
 $name=$_POST['name'];
 $surname=$_POST['surname'];
 $address=$_POST['address'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $phone_number=$_POST['phone_number'];
 $postcode=$_POST['postcode'];
 $email=$_POST['email'];


 if(mysqli_query($con,"INSERT INTO users(name, surname, username,password,phone_number,address,postcode,email) VALUES('$name', '$surname', '$username', '$password', '$phone_number', '$address','postcode','email')")){ 
	header("location: Registration.php?remarks=success");
 }else{
	 $e=mysqli_error($con);
	header("location: Registration.php?remarks=error&value=$e");	 
 }
}
?>