<?php

include_once("conn.php");

$sql=mysqli_query($conn,'select * from detail;');

;

echo '<h1>ALL DATA</h1><BR>';

echo '
	<table border="1">
	<tr>
	<td>Name</td>
	<td>Email</td>
	<td>Password</td>
	<td>Department</td>
	<td>Uid</td>
	</tr>
	
	';

while($data=mysqli_fetch_assoc($sql))
{
	echo '
	<tr>
	<td>'.$data['name'].'</td>
	<td>'.$data['email'].'</td>
	<td>'.$data['password'].'</td>
	<td>'.$data['department'].'</td>
	<td>'.$data['uid'].'</td>
	</tr>
	
	';
}
echo '</table>';

echo @$_GET['a'];
?>
