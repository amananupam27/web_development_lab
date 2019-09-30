<html>
<head>
<title>index.php</title>

<script>
function check()
{

var email=form1.elements["email"].value;
var pwd=form1.elements["pwd"].value;
var name=form1.elements["name"].value;
var uid=form1.elements["uid"].value;
var department=form1.elements["dept"].value;

var message="";
if(name=="")
{
	message+="-Enter name\n";
}
if(email=="")
{
	message+="-Enter email\n";
}
if(pwd=="")
{
	message+="-Enter password\n";
}

if(uid=="")
{
	message+="-Enter uid\n";
}

if(department=="")
{
	message+="-Enter department\n";
}



if(message)
{
	alert(message);
	return false;
	
}
}
</script>

</head>

<body>
<h1>ENTER DETAILS</h1>
<form method="post" action="insert.php" name="form1">
<table>
<tr>
<td>Name: </td><td><input type="value" name="name" id="name"></td>
</tr>
<tr>
<td>Email: </td><td><input type="email" name="email" id="email"></td>
</tr>
<tr>
<td>Password: </td><td><input type="password" name="pwd" id="pwd"></td>
</tr>
<tr>
<td>UID: </td><td><input type="value" name="uid" id="uid"></td>
</tr>
<tr>
<td>Department: </td><td><input type="value" name="dept" id="dept"></td>
</tr>
<tr>
<td>
<button type="reset" value="reset">Reset</button>
<button type="submit"  name="answer" onclick="return check()" >Submit</button>
</td>


</tr>
</table>
<?php
echo @$_GET['a'];
?>




</form>

</body>
</html>