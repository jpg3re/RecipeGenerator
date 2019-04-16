<?php 
    
    require('db-connect.php');
    $username=$_REQUEST['user'];

    $cookie_name = "user";
    $cookie_value = $username;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header('Location: ../index.html');
    exit;
?>