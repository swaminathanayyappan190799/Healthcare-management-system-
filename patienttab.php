<!DOCTYPE html>
<html>
<head>
	<title>Patient medication order details</title>
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
	<p1 style="font-family:cursive;"><center><b><u>Order details</u></b></center></p1>
	<br>
	<br>
	<hr>
	<br>
	<br>
	<table>
		<tr>
	<th>name</th>	
    <th>age</th>
    <th>Dname</th>
    <th>symptoms</th>
    <th>ptablet</th>
    <th>dosage</th>
    <th>period</th>
    <th>DFD</th>
    <th>TDFD</th>
    <th>MOP</th>
    <th>address</th>
    <th>mnumber</th>
</tr>

<?php

$conn = mysqli_connect("localhost","root","","healthcare");
if($conn->connect_error)
{

   die("Connection failed:".$conn->connect_error);
}
$sql="SELECT name,age,Dname,symptoms,ptablet,dosage,period,DFD,TDFD,MOP,address,mnumber from patientprescription";
$result=$conn->query($sql);

if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo "<tr><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["Dname"]."</td><td>".$row["symptoms"]."</td><td>".$row["ptablet"]."</td><td>".$row["dosage"]."</td><td>".$row["period"]."</td><td>".$row["DFD"]."</td><td>".$row["TDFD"]."</td><td>".$row["MOP"]."</td><td>".$row["address"]."</td><td>".$row["mnumber"]."</td></tr>";
	}
	echo"</table>";
}
else
{
	echo "0 result";
}
$conn->close();
?>
</table>
	<br>
	<br>
	<br>
	<br>
	<p1><u><b>Representation :</b></u></p1>
	<br>
	<br>
	<footer><b>DFD - </b>Date For Delivery [YYYY-MM-DD] </footer>
	<footer><b>TDFD -</b>Time Duration For Delivery [24 hrs dial]</footer> 
	<footer><b>MOP -</b>Mode of payment</footer>
	<hr>
	<center>
	<form action="awindow.html">
		<button>
			Back 
		</button>
	</form>
	<form action=""
</center>
</body>
</html>