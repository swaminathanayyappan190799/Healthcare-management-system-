<?php
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$mstatus=$_POST['mstatus'];
$disandsymptoms=$_POST['disandsymptoms'];
$affectedarea=$_POST['affectedarea'];
$identifieddays=$_POST['identifieddays'];
$treatmenttype=$_POST['treatmenttype'];
$specializeddoctor=$_POST['specializeddoctor'];
$addinfo =$_POST['addinfo'];

$conn = new mysqli('localhost','root','','healthcare');
if($conn->connect_error)
{
	die('Connection failed :'.$conn->connect_error);
}
else
{
$stmt = $conn->prepare("insert into doctorconsultation(name, age, gender, mstatus, disandsymptoms, affectedarea, identifieddays, treatmenttype, specializeddoctor, addinfo) values(?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sissssisss",$name,$age,$gender,$mstatus,$disandsymptoms,$affectedarea,$identifieddays,$treatmenttype,$specializeddoctor,$addinfo);
$stmt->execute();
echo"Your consultation request has been recorded successfully !!";
header("refresh:1;url=pwindow.html");
$stmt->close();
$conn->close(); 
}
?>
