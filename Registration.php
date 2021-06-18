<?php include "logincheck.php"; ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reg page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="image/yurt.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/design.css">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <title>Registration page</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center login-container p-5">
        <form class="login-form text-center" action="execute.php" onsubmit="return validateForm()" method="post">
        	<img src="uploads/logomini.jpg">
            <h4 class="mb-5 font-weight-light text-uppercase">
                <?php
                $remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
                if ($remarks==null and $remarks=="") {
                echo ' <div id="reg-head" class="headrg">Registration Form</div> ';
                }
                if ($remarks=='success') {
                echo ' <div id="reg-head" class="headrg">Registration Success <br> <h4>Please come back to <a href="login.php"> login </a> page</h4> </div> ';
                }
                if ($remarks=='failed') {
                echo ' <div id="reg-head-fail" class="headrg"><h4> Registration Failed!, Username exists</h4></div> ';
                }
                if ($remarks=='error') {
                echo ' <div id="reg-head-fail" class="headrg">Registration Failed! <br> Error: '.$_GET['value'].' </div> ';
                }
                ?></h4>
             <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" name="name" placeholder="Name"> 
            </div> 
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" name="surname" placeholder="Surname"> 
            </div>
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" placeholder="New username" id="username" name="username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control rounded-pill form-control-lg" placeholder="Password" id="password" name="password"> 
            </div>
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" name="phone_number" placeholder="Phone number"> 
            </div>
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" name="email" placeholder="Email"> 
            </div>
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" name="address" placeholder="Address"> 
            </div>
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" name="postcode" placeholder="Postcode"> 
            </div>
          
                        <input name="submit" type="submit" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase"></input>
        </form>
    </div>
    <br><br><br><br><br><br>
    <div class="panel-footer">
        <div class="p-5">
        <h3>CONTACT US :</h3>
            <div class="p1">
            <p><span style="color: #008b8b">General Designer</span> : Erkanat Abdul-Madi</p>
            <p>madi20.08@mail.ru</p>
            <p>8 775 227 65 51</p>
            </div>

            <div class="p2">
            <p><span style="color: #008b8b">Designer </span>: Sadykov Madikhan</p>
            <p>sssadykoff@mail.ru</p>
            <p>8 706 407 73 66</p>
            </div>
        </div>
    </div>
</body>
</html>