<?php

include 'common/connect.php';

$id=$_GET['eid'];
//print_r($id);die;
$exe=$obj->query("UPDATE event SET status='accept' WHERE e_id='$id'");
if ($exe) {
    header("location:m_event.php");
}
else {
    echo "Something went wrong";
}


?>