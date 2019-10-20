<?php
$patientname = $_POST['patientname'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$specialization = $_POST['specialization'];
$Bdate = $_POST['Bdate'];
$ad = $_POST['ad'];

$conn = new mysqli('localhost','root','','healthcare');

if($conn->connect_error)
{
	die('Connection failed :'.$conn->connect_error);
}
else
{
$stmt = $conn->prepare("insert into patientapp(patientname, mobilenumber, email, specialization, Bdate, ad)values(?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sissss",$patientname, $mobilenumber, $email, $specialization, $Bdate, $ad);
$stmt->execute();
echo"Your appointment has been fixed to our Dr.".$ad;
header("refresh:1;url=ppage2.html");
$stmt->close();
$conn->close(); 
}

?>