<?php
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'healthcare');
 
 $sql = "DELETE FROM patient where firstname='$_GET[firstname]'";

 if(mysqli_query($con,$sql))
 	header("refresh:1;url=delpat.php");
 else
 	echo "Deletion action not properly executed";
?>