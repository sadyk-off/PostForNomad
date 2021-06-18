<?php
 include('session.php');

?>
<!DOCTYPE html>
<html>
<head>
  <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>Profile</title>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="Main.php" style="color: black;">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="new_order.php">New Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log Out</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deleteac.php">Delete account</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>







<div id="center">
<div id="center-set">
<h1 align='center'>Welcome <?php echo $loggedin_session; ?>,</h1>

<div id="contentbox">
<?php

$sql="SELECT * FROM users where user_id= '$loggedin_id'";
$result=mysqli_query($con,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Your Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Reg id:</div> </td>
<td class="tl-4"><?php echo $rows['user_id']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Name:</div></td>
<td class="tl-4"><?php echo $rows['name']; ?> <?php echo $rows['surname']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
<td class="tl-4"><?php echo $rows['username']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Phone Number:</div></td>
<td class="tl-4"><?php echo $rows['phone_number']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Address:</div></td>
<td class="tl-4"><?php echo $rows['address']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Postcode:</div></td>
<td class="tl-4"><?php echo $rows['postcode']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email:</div></td>
<td class="tl-4"><?php echo $rows['email']; ?></td>
</tr>
</table>
<div id="reg-bottom" class="btmrg">PFN</div>
</form>
</div>
</div>
<?php 
// close while loop 
}
?>


<?php
$query="SELECT * FROM orders where user_id= '$loggedin_id'";
$res=mysqli_query($con,$query);
?>
<?php

// if(!empty($check_order['order_id'])) {
 while($rows=mysqli_fetch_array($res)){
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" >
<div id="reg-head" class="headrg">Order History</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Order ID:</div> </td>
<td class="tl-4">
<?php 
if(!empty($rows['order_id'])) {
echo $rows['order_id'];
} else {
  echo "-||-||-||-||-";
} ?>
  
</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Destination:</div></td>
<td class="tl-4">
<?php 
if(!empty($rows['to_address'])) {
  echo $rows['to_address']; 
} else {
  echo "-||-||-||-||-";
}
?>
  
</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Receiver contact:</div></td>
<td class="tl-4">
<?php 
if(!empty($rows['recepient_contact'])) {
  echo $rows['recepient_contact']; 
} else {
  echo "-||-||-||-||-";
}
?>
  
</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Track Number:</div></td>
<td class="tl-4" id="track_number">
<?php 
if(!empty($rows["track"])) {

  echo $rows['track']; 
} else {
  echo "-||-||-||-||-";
}

?>
    
</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Total cost:</div></td>
<td class="tl-4">
<?php 
if(!empty($rows['cost'])) {
  echo "$".$rows['cost']; 
} else {
  echo "-||-||-||-||-";
}
?>
</td>
</tr>






</table>
</form>
</div>
</div>
<?php 
// close while loop 

 }
// } 

?>








<!-- <div id="login">
<div id="login-sg">
<div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div>
<div id="st"><a href="deleteac.php" id="st-btn">Delete Account</a></div>
</div>
</div> -->








</div>
</div>
</div>
</br>
</body>
</html>