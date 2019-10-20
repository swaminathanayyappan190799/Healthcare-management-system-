<!DOCTYPE html>
<html>
<head>
	<title>Consulatation records of patients</title>
	<style>
		table{
			border-collapse: collapse;
			width: 100%;
			color:#2232F7;
			font-family:italic;
			font-size:20px;
			text-align: center;
		}
		th{
			background-color:#F76522 ;
			color :white;
		}
		tr:nth-child(even){backgroung-color:#BAD1C7;}
	</style>
</head>
<body>
	<br>
	<br>
	<p1 style="font-family:cursive;"><center><b><u>Consultation records</u></b></center></p1>
	<br>
	<br>
	<hr>
	<br>
	<br>
	<table>
		<tr>
	<th>name</th>	
    <th>age</th>
    <th>gender</th>
    <th>disandsymptoms</th>
    <th>affectedarea</th>
    <th>identifieddays</th>
    <th>treatmenttype</th>
    <th>specializeddoctor</th>
    <th>addinfo</th>
</tr>

<?php

$conn = mysqli_connect("localhost","root","","healthcare");
if($conn->connect_error)
{

   die("Connection failed:".$conn->connect_error);
}
$sql="SELECT name,age,gender,disandsymptoms,affectedarea,identifieddays,treatmenttype,specializeddoctor,addinfo from doctorconsultation";
$result=$conn->query($sql);

if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo "<tr><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["disandsymptoms"]."</td><td>".$row["affectedarea"]."</td><td>".$row["identifieddays"]."</td><td>".$row["treatmenttype"]."</td><td>".$row["specializeddoctor"]."</td><td>".$row["addinfo"]."</td></tr>";
	}
	echo"</table>";
}
else
{
	echo "Sorry there is no consultation records !!";
}
$conn->close();
?>
</table>
<center>
	<br>
	<br>
	<br>
	<br>
	<form action="dwindow.html">
		<button>
			Back to panel
		</button>
	</form>
</center>
</body>
</html>