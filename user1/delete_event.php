<?php

session_start();
include 'common/connect.php';

//session code

if(!isset($_SESSION['user_id']))
{
    header('location:home.php');
}
//finish



$id = $_GET["delid"];

$exe = $obj->query("delete from event where e_id='$id'");

if($exe)
{
	header('location:read_event.php');
}
else
{
	echo "Error...";
}

?>