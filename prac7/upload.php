<?php

include_once('conn.php');


$img_name=$_FILES['img']['name'];
$img_tmp=$_FILES['img']['tmp_name'];


move_uploaded_file($img_tmp, "images/".$img_name);
echo 'inserted successfully';


mysqli_query($conn, 'insert into image (image) values  ("'.$img_name.'"); ');
echo '
<img src="images/'.$img_name.'" width="500" height="500">

';


?>
