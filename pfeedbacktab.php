<!DOCTYPE html>
<html>
<head>
	<title>Patient feedback about our services</title>
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
	<p1 style="font-family:cursive;"><center><b><u>Patient feedback</u></b></center></p1>
	<br>
	<br>
	<hr>
	<br>
	<br>
	<table>
		<tr>
	<th>name</th>	
    <th>mnumber</th>
    <th>email</th>
    <th>vtype</th>
    <th>opinion</th>
    <th>tfeed</th>
</tr>

<?php

$conn = mysqli_connect("localhost","root","","healthcare");
if($conn->connect_error)
{

   die("Connection failed:".$conn->connect_error);
}
$sql="SELECT name,mnumber,email,vtype,opinion,tfeed from patientfeedback";
$result=$conn->query($sql);

if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo "<tr><td>".$row["name"]."</td><td>".$row["mnumber"]."</td><td>".$row["email"]."</td><td>".$row["vtype"]."</td><td>".$row["opinion"]."</td><td>".$row["tfeed"]."</td></tr>";
	}
	echo"</table>";
}
else
{
	echo "Sorry there is no feedbacks !!";
}
$conn->close();
?>
</table>
<center>
	<br>
	<br>
	<br>
	<br>
	<form action="awindow.html">
		<button>
			Back to panel
		</button>
	</form>
</center>
</body>
</html>