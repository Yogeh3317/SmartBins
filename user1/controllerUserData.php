<?php 
session_start();
require "connect.php";
$email = "";
$name = "";
$errors = array();
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: adminlogin.php');  
    }
?>