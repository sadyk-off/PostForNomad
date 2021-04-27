<?php
    
    if (isset($_POST['username'])) { 
    $username = $_POST['username']; 
    if ($username == '') { 
        unset($username);
        } 
    } 
    if (isset($_POST['password'])) { 
        $password=$_POST['password']; 
        if ($password =='') { 
            unset($password);
        } 
    }

      
 if (empty($username) or empty($password)) 
    {
        header("Location: Registration.php");
    
    }
  
    $username = stripslashes($username);
    $username = htmlspecialchars($username);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
 
    $username = trim($username);
    $password = trim($password);

    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $surname = stripslashes($surname);
    $surname = htmlspecialchars($surname);
 
    $name = trim($name);
    $surname = trim($surname);
 
    require ("functions.php"); 
 
    $result = mysqli_query(getConnection(), "SELECT * FROM users WHERE username='$username'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Sorry, this 'username' is already exists");
    }
 
    $result2 = mysqli_query(getConnection(), "INSERT INTO users(username,password) VALUES('$username','$password')");
    
    if ($result2)
    {   
    header("Location: Main.php");
    
    }
    else {
    header("Location: Registration.php");
    }
    ?>