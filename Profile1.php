<?php
 include('session.php');

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="css/profile.css" rel="stylesheet">
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div id="content" class="content content-full-width">
            <!-- begin profile -->
            <div class="profile">
               <div class="profile-header">
                  <!-- BEGIN profile-header-cover -->
                  <div class="profile-header-cover"></div>
                  <!-- END profile-header-cover --><nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="Main.php" style="color: black;">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="order2.php" style="color: black;">New Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="color: black;">Log Out</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deleteac.php" style="color: black;">Delete account</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
                  <!-- BEGIN profile-header-content -->
                  <div class="profile-header-content">
                     <!-- BEGIN profile-header-img -->
                     <div class="profile-header-img">
                        <img src="https://cdn.icon-icons.com/icons2/936/PNG/512/user-shape_icon-icons.com_73346.png" alt="">
                     </div>
                     <!-- END profile-header-img -->
                     <!-- BEGIN profile-header-info -->
                     <div class="profile-header-info">
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
<div id="reg-head" class="headrg"><h3>Your Profile</h3></div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name"><h4>Reg id:</h4></div> </td>
<td class="tl-4"><?php echo $rows['user_id']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name"><h4>Name:</h4></div></td>
<td class="tl-4"><?php echo $rows['name']; ?> <?php echo $rows['surname']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name"><h4>Username:</h4></div></td>
<td class="tl-4"><?php echo $rows['username']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name"><h4>Phone Number:</h4></div></td>
<td class="tl-4"><?php echo $rows['phone_number']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name"><h4>Address:</h4></div></td>
<td class="tl-4"><?php echo $rows['address']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name"><h4>Postcode:</h4></div></td>
<td class="tl-4"><?php echo $rows['postcode']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name"><h4>Email:</h4></div></td>
<td class="tl-4"><?php echo $rows['email']; ?></td>
</tr>
</table>
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
<div id="reg-head" class="headrg"><h3>Order History</h3></div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name"><h4>Order ID:</h4></div> </td>
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
<td class="tl-1"><div align="left" id="tb-name"><h4>Destination:</h4></div></td>
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
<td class="tl-1"><div align="left" id="tb-name"><h4>Receiver contact:</h4></div></td>
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
<td class="tl-1"><div align="left" id="tb-name"><h4>Track Number:</h4></div></td>
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
<td class="tl-1"><div align="left" id="tb-name"><h4>Total cost:</h4></div></td>
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

                     </div>
                     <!-- END profile-header-info -->
                  </div>
                  <!-- END profile-header-content -->
                  <!-- BEGIN profile-header-tab --
                  <!- END profile-header-tab -->
               </div>
            </div>
            <!-- end profile -->
            <!-- begin profile-content -->
            <div class="profile-content">
               <!-- begin tab-content -->
               
            </div>
            <!-- end profile-content -->
         </div>
      </div>
   </div>
</div>