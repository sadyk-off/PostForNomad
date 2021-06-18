<?php include("session.php"); ?>
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
      <h2>Product Order Form</h2>
      <img src="image/yurt.png" alt="yurt" width="80" height="60" style="filter: brightness(0) invert(1); margin-left:55%;">
      <a class="navbar-brand" href="#" style="font-weight: bold; color: white; text-decoration: none;">PFN</a>
  </div>
<div class="d-flex">
  <form action="" method="POST">
    <label>
      <span >TO ADDRESS <span class="required">*</span></span>
      <input type="text" class="form-control rounded-pill form-control-lg"  id="to_address" name="to_address" value="<?php echo isset($_POST['to_address']) ? htmlspecialchars($_POST['to_address']) : ''; ?>">
    </label>
    <label>
      <span >FROM ADDRESS <span class="required">*</span></span>
      <input type="text" class="form-control rounded-pill form-control-lg"  id="to_postcode" name="to_postcode" value="<?php echo isset($_POST['to_postcode']) ? htmlspecialchars($_POST['to_postcode']) : ''; ?>">
    </label>
    <label>
      <span >Enter weight in grams <span class="required">*</span></span>
      <input type="text" class="form-control rounded-pill form-control-lg"  id="weight" name="weight" value="<?php echo isset($_POST['weight']) ? htmlspecialchars($_POST['weight']) : ''; ?>">
    </label>
    <label>
      <span>Enter the size via spaces (long,height,width) <span class="required">*</span></span>
      <input type="text" class="form-control rounded-pill form-control-lg"  id="size" name="size" value="<?php echo isset($_POST['size']) ? htmlspecialchars($_POST['size']) : ''; ?>">
    </label>
    <br>
    <label>
      <span class="text-left">Recipient data <span class="required">*</span></span>
      <input type="text" class="form-control rounded-pill form-control-lg"  id="recepient_contact" name="recepient_contact" value="<?php echo isset($_POST['recepient_contact']) ? htmlspecialchars($_POST['recepient_contact']) : ''; ?>"> 
    </label>
    <label for="delivery_method"><span class="text-left">Type of delivery <span class="required">*</span></span>
                <select id="delivery_method" name="delivery_method" style="width: 80px">
                    <option value="air">Air</option>
                    <option value="train">Train</option>
                    <option value="truck">Truck</option>
                </select>
  </label>
      <input type="submit" name="submit" value="Submit" style="margin-left: 37%;"> 
    </label>
    
  </form>
  
</body>
</html>
<?php
include_once("function.php");
if(isset($_POST['submit'])) {
        if(!empty($_POST['to_address']) && !empty($_POST['to_postcode']) && !empty($_POST['weight']) && !empty($_POST['size']) && !empty($_POST['recepient_contact'])) {

        $to_address = $_POST['to_address'];
        $to_postcode = $_POST['to_postcode'];
        $weight = $_POST['weight'];
        $size = $_POST['size'];
        $recepient_contact = $_POST['recepient_contact'];
        $track = rand(10000,100000);
        $_SESSION['track'] = $track;
        $cost;
        $user_id = $loggedin_id;


                    list($length, $width, $height) = explode(" ", $size);
                    
                    if($_POST['delivery_method'] == "air") {
                        if($weight <2000) {  
                                $cost = 9.5 * (($length * $width * $height)/3000);
                        } elseif ($weight <10000) {
                                $cost=9.5+(0.00096*($weight-2000)) * (($length * $width * $height)/2000);
                        } else {
                                $cost=0;
                                echo "Too heavy!";
                        }
                    } elseif ($_POST['delivery_method'] == "train") {
                        if($weight <3000) {
                            
                        $cost=3.8 * (($length * $width * $height)/3000);                              
                        } elseif ($weight <100000) {                            
                                $cost=2.8+(0.00076*($weight-3000)) * (($length * $width * $height)/3000);                                
                        } else {                            
                                $cost=0;
                        }         
                    } elseif ($_POST['delivery_method'] == "truck") {
                        if($weight <3000) {
                                $cost=5.8 * (($length * $width * $height)/1000);     
                        } elseif ($weight <10000) {
                            
                                $cost=5.8+(0.00086*($weight-3000)) * (($length * $width * $height)/1000);
                        } else {
                                $cost=0;
                        }
                    }

                    
                    if($cost != 0) {
                    $sql = insert_order($to_address,$to_postcode,$weight,$size,$recepient_contact,$track,$cost, $user_id);

                    echo "hello";

                    if($sql) {
                         setcookie('track', $track, time()+86400);
                         echo "Success";
                         header("Location: confirm_order2.php");
                    } else{
                        echo "Form, not submited";
                    }
                    }
                    else {
                    echo "All fields required!";
                    }


    } 
}
?>