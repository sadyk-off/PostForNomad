
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
  <title>Document</title>
</head>
<body>
<?php
session_start();
// the whole procedure works in sessions. This is where the user's data is stored while they are on the site. It is very important to run them at the very beginning of the page!!!
if (isset($_POST['username'])) { 
  $username = $_POST['username']; 
  if ($username == '') { 
    unset($username);//enter the username entered by the user in the $username variable, if it is empty, then destroy the variable
  } 
}
//enter the password entered by the user in the $password variable, if it is empty, then destroy the variable
if (isset($_POST['password'])) { 
  $password=$_POST['password']; 
  if ($password =='') { 
    unset($password);
  } 
}


if (empty($username) or empty($password)) 
{
    
    header("Location: login.php");
    
    // echo '<script type="text/javscript">';
    // echo 'alert("The username or password not filled, try to type again !");';
    // echo '</script>';
    }

//if the username and password are entered, then we process them so that the tags and scripts do not work, you never know what people can enter
$username = stripslashes($username);
$username = htmlspecialchars($username);

$password = stripslashes($password);
$password = htmlspecialchars($password);

//removing extra spaces
$username = trim($username);
$password = trim($password);

// connecting to the database VIA THE FUNCTION
require ("functions.php");  

searchInDB($username);

$result = mysqli_query(getConnection(), "SELECT * FROM users WHERE username='$username'"); 
// extract from the database all data about the user with the entered username
$myrow = mysqli_fetch_array($result);
if (empty($myrow['password']))
{
header("Location: login.php");

    // echo '<script type="text/javscript">';
    // echo 'alert("Sorry, the login or password you entered is incorrect !");';
    // echo '</script>';
    
// exit ("Sorry, the login or password you entered is incorrect.");
}
else {

        if ($myrow['password']==$password) {
          
        $_SESSION['username']=$myrow['username']; 
        $_SESSION['id']=$myrow['id'];
        
        header("location: Main.php");
        // print<<<htmlblock1
        // <script type='text/javscript'>
        // alert("You have successfuly log in !");
        // </script>
        // htmlblock1;
        
        
        }
        else {
        //if the passwords don't match
          header("Location: login.php");
            
            // echo '<script type="text/javscript">';
            // echo 'alert("There is not this user, please try again or "<br>" go to the registarion!");';
            // echo '</script>';
            
        }
    }
?>
</body>
</html>
