<?php

$conn = mysqli_connect("localhost","root","","healthcare");
if(isset($_POST["proceed to updation"]))
{
	$firstname = $_POST['firstname'];
	$answer = $_POST['answer'];
	$query = mysqli_query($conn,"select * from patient at where firstname = '$firstname' && answer = '$answer' ")or die("Failed to query database".mysql_error());
	$rowcount = mysqli_num_rows($query);
	if($rowcount==true)
	{
		header("location:up.php");
	}
	else
	{
		echo"Wrong";
		header("refresh:1;url=Mark_1.html");
	}
}
?>