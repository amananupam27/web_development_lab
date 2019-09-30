<?php

include_once("conn.php");
$sr=$_GET['sr'];
$sql=mysqli_query($conn,'select * from detail where sr='.$sr.';');
$data=mysqli_fetch_assoc($sql);

$name=$data['name'];
$email=$data['email'];
$pwd=$data['password'];
$dept=$data['department'];
$uid=$data['uid'];


echo '<h1>UPDATE</h1><BR>
<h3>

<form method="post" action="up2.php" name="form1">
<table>

<input type="hidden" name="sr" value="'.$sr.'">
<tr>
<td>Name: </td><td><input type="value" name="name" id="name" value="'.$name.'"></td>
</tr>
<tr>
<td>Email: </td><td><input type="email" name="email" id="email" value="'.$email.'"></td>
</tr>
<tr>
<td>Password: </td><td><input type="value" name="pwd" id="pwd" value="'.$pwd.'"></td>
</tr>
<tr>
<td>UID: </td><td><input type="value" name="uid" id="uid"  value="'.$uid.'"></td>
</tr>
<tr>
<td>Department: </td><td><input type="value" name="dept" id="dept"  value="'.$dept.'"></td>
</tr>
<tr>
<td>
<button type="reset" value="reset">Reset</button>
<button type="submit"  name="answer" onclick="return check()" >Submit</button>
</td>


</tr>
</table>
</form>



</h3>
';

?>
