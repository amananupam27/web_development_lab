<?php

include_once("conn.php");

$sr=  $_POST['sr'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$name = $_POST['name'];
$department = $_POST['dept'];
$uid = $_POST['uid'];

mysqli_query($conn,'

update detail set email="'.$email.'",password="'.$pwd.'",name="'.$name.'",uid="'.$uid.'",department="'.$department.'"  where sr="'.$sr.'";
');



header("location:update.php?a=Data Updated");

?>
