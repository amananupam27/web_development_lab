<?php



$first_name = $_POST['fname'];
$last_name = $_POST['sname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$dd = $_POST['dd'];
$mm = $_POST['mm'];
$yyyy = $_POST['yyyy'];


header("location:index4.php?a=$first_name && b=$last_name && c=$email && d=$pwd && e=$contact && f=$address && g=$dd && h= $mm  && i=$yyyy");

?>


