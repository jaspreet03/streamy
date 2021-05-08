<?php
session_start();


//if(!isset($_COOKIE["login"]))// $_COOKIE is a variable and login is a cookie name 
if(!isset($_SESSION['user'])){
	header("location:loginpage.php"); 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STREAMY</title>
    <link rel="icon" href="img/streamy.png">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="css/lightslider.css">
  
    <!-----js-link ------------>
    <script src="js/JQuery3.3.1.js"></script>
    <script src="js/lightslider.js"></script>
    <!-- using fontawesome -------->
    <script src="https://kit.fontawesome.com/ccf9756b8c.js" crossorigin="anonymous"></script>
</head>

