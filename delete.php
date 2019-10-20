<?php
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'healthcare');
 
 $sql="DELETE FROM doctor where firstname='$_GET[firstname]'";

 if(mysqli_query($con,$sql))
 	header("refresh:1;url=deldoc.php");
 else
 	echo "Deletion Action not properly executed";
?>