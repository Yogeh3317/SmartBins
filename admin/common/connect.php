<?php

// Database Connection
$obj = new mysqli("localhost","root","","project");

if($obj->connect_errno != 0)
{
	echo $obj->connect_error;
	exit;
}

?>