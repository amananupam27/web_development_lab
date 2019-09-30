<?php

include_once("conn.php");

$sr=  $_GET['sr'];


mysqli_query($conn,'delete from detail where sr="'.$sr.'"');




header("location:show.php?a=Deleted");

?>
