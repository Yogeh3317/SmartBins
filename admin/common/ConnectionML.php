<?php

// Database Connection
$conn = new mysqli("localhost","root","","waste_detect1");

if($conn->connect_errno != 0)
{
	echo $conn->connect_error;
	exit;
}

?>