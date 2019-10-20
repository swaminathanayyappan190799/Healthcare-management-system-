<?php

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'healthcare');

$sql="UPDATE patient SET firstname='$_POST[firstname]',lastname='$_POST[lastname]',dateofbirth='$_POST[dateofbirth]',city='$_POST[city]',zipcode='$_POST[zipcode]',state='$_POST[state]',country='$_POST[country]',mobilenumber='$_POST[mobilenumber]',gender='$_POST[gender]',username='$_POST[username]',password='$_POST[password]' WHERE email='$_POST[email]'";

if(mysqli_query($con,$sql))
{
	echo"Updation successfull !!";
      header("refresh:1; url=pwindow.html");
}
else
{ 
          echo"Records are not updated"; 
}
?>