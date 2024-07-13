<?php

include 'common/connect.php';

$id=$_GET['delid'];
$exe=$obj->query("delete from event where e_id='$id'");
if ($exe) {
    header("location:read_event.php");
}
else {
    echo "Something went wrong";
}


?>