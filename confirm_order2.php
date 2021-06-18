<?php
include("session.php");


$user_name = $loggedin_session;
$user_ID = $loggedin_id;

$track = $_SESSION['track'];



$query = "SELECT * FROM orders WHERE track = '$track'";
$result = mysqli_query($con,$query);


while ($row = mysqli_fetch_assoc($result)) {

if(isset($_POST['submit'])){
    header("Location: Profile1.php");
}
if(isset($_POST['cancel'])){
    $delete = "DELETE FROM orders WHERE track = '$track'";
    $res = mysqli_query($con,$delete);
    header("Location: Profile1.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>Confirm</title>
  <link rel="stylesheet" href="css/confirm.css">
</head>

<body>
    <div class="container">
    <div class="title d-flex">
      <h1>Confirm</h1>
      <img src="image/yurt.png" alt="yurt" width="80" height="60" style="filter: brightness(0) invert(1); margin-left:20%;">
      <a class="navbar-brand" href="#" style="font-weight: bold; color: white; text-decoration: none;">PFN</a>
  </div>
  <div class="d-flex">
    <form action="Profile1.php" method="post">
            <label for="to_address" style="font-weight: bold;">Delivery to address: </label>
            <div class="form-group" id="to_address">
                            <?php echo $row['to_address']; ?>
            </div>

            <label for="track" style="font-weight: bold;">Track number: </label>
            <div class="form-group" id="track">
                            <?php echo $row['track']; ?>
            </div>

            <label for="cost" style="font-weight: bold;">Total cost: </label>
            <div class="form-group" id="cost">
                            <?php echo '$'.$row['cost']; ?>
                <?php
                }
                ?>
            </div>
            
            <div class="forgot-link form-group d-flex justify-content-between align-items-center">
            
                
            </div>
            <input name="submit" type="submit" style="color:lime; margin-left: 20%"; class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase">
            <br><br>
            <input name="cancel" type="submit" style="margin-left: 20%; color:red"; class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase" value="Cancel">
            <br>
            <br>
            <p class="mt-3 font-weight-normal">Not satisfied with the order? <strong>Cancel the order</strong></p>
    </div>
</div>
</div>
</form>
    
</body>
</html>