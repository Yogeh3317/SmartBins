<?php

include 'common/connect.php';

$id=$_GET['delid'];
//print_r($id);die;
$exe=$obj->query("UPDATE event SET status='Reject' WHERE e_id='$id'");
if ($exe) {
    header("location:m_event.php");
}
else {
    echo "Something went wrong";
}


?>