Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 
@amananupam27 
1
00amananupam27/wd-lab
 Code Issues 0 Pull requests 0 Projects 0 Wiki Security Insights Settings
wd-lab
/
prac4
/
result.php
 

1
<?php
2
​
3
$first_name = $_POST['fname'];
4
$last_name = $_POST['sname'];
5
$email = $_POST['email'];
6
$pwd = $_POST['pwd'];
7
​
8
$contact = $_POST['contact'];
9
$address = $_POST['address'];
10
$dd = $_POST['dd'];
11
$mm = $_POST['mm'];
12
$yyyy = $_POST['yyyy'];
13
echo '<h1>HERE ARE YOUR DETAILS</h1><br>';
14
echo '<h3>
15
​
16
<table border=1 cellpadding="20">
17
<tr>
18
<td>Full Name </td><td>'.$first_name.' '.$last_name.'</td>
19
</tr>
20
<tr>
21
<td>Email</td><td>'.$email.'</td>
22
</tr>
23
<tr>
24
<td>Password</td><td>'.$pwd.'</td>
25
</tr>
26
<tr>
27
<td>Date of Birth</td><td>'.$dd.'/'.$mm.'/'.$yyyy.'</td>
28
</tr>
29
<tr>
30
<td>Contact</td><td>'.$contact.'</td>
31
</tr>
32
<tr>
33
<td>Address</td><td>'.$address.'</td>
34
</tr>
35
</table>
36
​
37
​
38
​
39
</h3>';
40
​
41
​
42
?>

