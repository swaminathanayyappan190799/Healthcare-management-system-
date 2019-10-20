<?php

$con = mysqli_connect("localhost","root","","healthcare");

if(isset($_POST["login"]))

{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = mysqli_query($con,"select * from doctor at where username = '$username' && password = '$password'")or die("Failed to query database".mysql_error());
	$rowcount = mysqli_num_rows($query);
	if($rowcount==true)
	{
		header("refresh:1;url=dwindow.html");
	}
	else
	{
		echo "your login credentials are incorrect";
		header("refresh:2;url=Mark_3.html");
		die();
	}
}

?>
