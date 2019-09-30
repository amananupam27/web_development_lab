<?php

include_once("conn.php");


$email = $_POST['email'];
$pwd = $_POST['pwd'];
$name = $_POST['name'];
$department = $_POST['dept'];
$uid = $_POST['uid'];

mysqli_query($conn,'insert into detail (email,password,name,uid,department) values ("'.$email.'","'.$pwd.'","'.$name.'","'.$uid.'","'.$department.'");');

header("location:data_insert.php?a=Data Inserted");
echo "Date Inserted";
?>
