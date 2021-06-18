

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>PFN order</title>
  <link rel="stylesheet" href="css/order.css">
</head>

<body>
<div class="container">
  <div class="title d-flex">
      <h2>Current Location</h2>
      <img src="image/yurt.png" alt="yurt" width="80" height="60" style="filter: brightness(0) invert(1); margin-left:55%;">
      <a class="navbar-brand" href="#" style="font-weight: bold; color: white; text-decoration: none;">PFN</a>
  </div>
<div class="d-flex">
  <form action="" method="POST">
    <label>
      <span >Order_id <span class="required">*</span></span>
      <input type="text" class="form-control rounded-pill form-control-lg"  id="order_id" name="order_id" >
    </label>
    <label>
      <span >Step <span class="required">*</span></span>
      <input type="text" class="form-control rounded-pill form-control-lg"  id="step" name="step" >
    </label>
    <label>
      <span >Place <span class="required">*</span></span>
      <input type="text" class="form-control rounded-pill form-control-lg"  id="place" name="place" >
    </label>

    <label>
      <span >Date <span class="required">*</span></span>
      <input type="Date" class="form-control rounded-pill form-control-lg"  id="date" name="date" >
    </label>
    
    <br>
    
    
      <input type="submit" name="submit" value="Submit" style="margin-left: 37%;"> 
    </label>
    
  </form>
  
</body>
</html>
<?php
include("db.php");
if(isset($_POST['submit'])) {
    $order_id = $_POST['order_id'];
    $step = $_POST['step'];
    $place = $_POST['place'];
    $date=$_POST['date'];
    $query = "INSERT INTO location (order_id,step,place,date) VALUES ('$order_id','$step','$place','$date')";
    $result = mysqli_query($con,$query);
    header("Location: admin_page.php");
}
?>