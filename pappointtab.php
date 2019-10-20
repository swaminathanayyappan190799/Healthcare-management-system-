<!DOCTYPE html>
<html>
<head>
	<title>Appointment records of patients</title>
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
	<p1 style="font-family:cursive;"><center><b><u>Appointment Details</u></b></center></p1>
	<br>
	<br>
	<hr>
	<br>
	<br>
	<table>
		<tr>
	<th>patientname</th>	
    <th>mobilenumber</th>
    <th>email</th>
    <th>specialization</th>
    <th>Bdate</th>
    <th>ad</th>
</tr>

<?php

$conn = mysqli_connect("localhost","root","","healthcare");
if($conn->connect_error)
{

   die("Connection failed:".$conn->connect_error);
}
$sql="SELECT patientname,mobilenumber,email,specialization,Bdate,ad from patientapp";
$result=$conn->query($sql);

if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo "<tr><td>".$row["patientname"]."</td><td>".$row["mobilenumber"]."</td><td>".$row["email"]."</td><td>".$row["specialization"]."</td><td>".$row["Bdate"]."</td><td>".$row["ad"]."</td></tr>";
	}
	echo"</table>";
}
else
{
	echo "Sorry there is no appointments  !!";
}
$conn->close();
?>
</table>
	<br>
	<br>
	<br>
	<br>
	<p1><u>Representation :</u></p1>
	<br>
	<footer><b>Bd -</b>Booked date</footer>
	<footer><b>ad -</b>Available doctor</footer>
	<center>
	<form action="dwindow.html">
		<button>
			Back to panel
		</button>
	</form>
</center>
</body>
</html>