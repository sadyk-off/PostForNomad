<?php include "logincheck.php"; ?>
<html lang="en">

<head>
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
    <title>Login page for PFN</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center login-container">
        <form class="login-form text-center" action="" method="POST">
        	<img src="uploads/logomini.jpg" style="width: 150px; height: 150px;">
            <h2> <?php
                $remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
                if ($remarks==null and $remarks=="") {
                echo ' <div id="reg-head" class="headrg">Login</div> ';
                }
                if ($remarks=='failed') {
                echo ' <div id="reg-head-fail" class="headrg">Login Failed!, Invalid Credentials</div> ';
                }
                ?> 
            </h2>
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" placeholder="Username" id="username" name="username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control rounded-pill form-control-lg" placeholder="Password" id="password" name="password">
            </div>
            <div class="forgot-link form-group d-flex justify-content-between align-items-center">
                <a href="#">Forgot Password?</a>
            </div>
            <input type="submit" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase"><a href="Profile1.php.php"></a> </input>
            <p class="mt-3 font-weight-normal">Don't have an account? <a href="Registration.php"><strong>Register Now</strong></a></p>
        </form>
    </div>
</body>
<div class="panel-footer">
    	<h3>CONTACT US :</h3>
    		<div class="p1">
    	 	<p><span style="color: #666">General Designer</span> : Erkanat Abdul-Madi</p>
         	<p>madi20.08@mail.ru</p>
         	<p>8 775 227 65 51</p>
    		</div>

    		<div class="p2">
    		<p><span style="color: #666">Designer </span>: Sadykov Madikhan</p>
         	<p>sssadykoff@mail.ru</p>
         	<p>8 706 407 73 66</p>
    		</div>
	</div>
</html>