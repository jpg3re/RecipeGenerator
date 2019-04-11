<?php 
$hostname= 'localhost';

$username='jpg3re';

$dsn = "mysql:host=$hostname; dbname=jpg3re";


try
{
    $db= new PDO($dsn, $username);
}
catch(PDOException $e){
    $error_msg=$e->getMessage();
    echo "<p> An error occurred while connecting to thte database:$error_msg</p>";
}
catch(Exception $e)
{
    $error_msg=$e->getMessage();
    echo "<p> Error Message:$error_msg</p>";
}
?>