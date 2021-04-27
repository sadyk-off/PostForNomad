<?php

function getConnection() {
$host = "localhost";
$db = "post_for_nomad";
$user = "root";
$password = "";

$conn = mysqli_connect($host, $user, $password, $db);

if (mysqli_connect_error()) {
    echo mysqli_connect_errno().": ".mysqli_connect_error();
}
return $conn;
}

function searchInDB($username) {
    $conn = getConnection();

    $sql = 'SELECT id, username, password FROM users WHERE username="'.$username.'" ';
    $res = $conn->query($sql);
    if ($conn->error) {
        print_r($conn->error);
    }

    $user = $res->fetch_assoc();
    if ($username == $user['username']) {
        return $user;
    }
    return false;
}

function function_alert() {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>