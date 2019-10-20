<?php
$name=$_POST['name'];
$age=$_POST['age'];
$Dname=$_POST['Dname'];
$symptoms=$_POST['symptoms'];
$ptablet=$_POST['ptablet'];
$dosage=$_POST['dosage'];
$period=$_POST['period'];
$DFD=$_POST['DFD'];
$TDFD=$_POST['TDFD'];
$MOP=$_POST['MOP'];
$address=$_POST['address'];
$mnumber=$_POST['mnumber'];

$conn = new mysqli('localhost','root','','healthcare');
if($conn->connect_error)
{
	die('Connection failed :'.$conn->connect_error);
}
else
{
$stmt = $conn->prepare("insert into patientprescription(name, age, Dname, symptoms, ptablet, dosage, period, DFD, TDFD, MOP, address, mnumber) values(?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sissssssssss",$name,$age,$Dname,$symptoms,$ptablet,$dosage,$period,$DFD,$TDFD,$MOP,$address,$mnumber);
$stmt->execute();
echo"Your prescription records was received by us we will deliver your medicines as soon as possible within the mentioned Date and time  !!";
header("refresh:3;url=pwindow.html");
$stmt->close();
$conn->close(); 
}
?>
