<?php
$name=$_POST['name'];
$mnumber=$_POST['mnumber'];
$email=$_POST['email'];
$vtype=$_POST['vtype'];
$opinion=$_POST['opinion'];
$tfeed=$_POST['tfeed'];

$conn = new mysqli('localhost','root','','healthcare');
if($conn->connect_error)
{
	die('Connection failed :'.$conn->connect_error);
}
else
{
$stmt = $conn->prepare("insert into patientfeedback(name, mnumber, email, vtype, opinion, tfeed) values(?,?,?,?,?,?)");
$stmt->bind_param("sissss",$name,$mnumber,$email,$vtype,$opinion,$tfeed);
$stmt->execute();
echo"Your Feedback has been submitted successfully !!";
header("refresh:1;url=ppage2.html");
$stmt->close();
$conn->close(); 
}
?>