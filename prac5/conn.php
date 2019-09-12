<?php

$conn=mysqli_connect("localhost","root","","basedata");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$first_name = $_POST['fname'];
$last_name = $_POST['sname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$dd = $_POST['dd'];
$mm = $_POST['mm'];
$yyyy = $_POST['yyyy'];

mysqli_query($conn,'insert into details (F_NAME,L_NAME,EMAIL,PASSWORD,CONTACT,DATE,MONTH,YEAR,ADDRESS) values ("'.$first_name.'","'.$last_name.'","'.$email.'","'.$pwd.'","'.$contact.'","'.$dd.'","'.$mm.'","'.$yyyy.'","'.$address.'");');

echo "Date Inserted";
?>


