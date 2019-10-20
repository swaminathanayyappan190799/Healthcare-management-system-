<!DOCTYPE html>
<html>
<head>
	<title>Sample table database</title>
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
	<table>
		<tr>
	<th>firstname</th>	
    <th>lastame</th>
    <th>UG</th>
    <th>PG</th>
    <th>branch</th>
    <th>mobilenumber</th>
    <th>email</th>
    <th>city</th>
    <th>zipcode</th>
    <th>state</th>
    <th>country</th>
    <th>gender</th>
    <th>username</th>
    <th>password</th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","","healthcare");
if($conn->connect_error)
{

   die("Connection failed:".$conn->connect_error);
}
$sql="SELECT firstname,lastname,UG,PG,branch,mobilenumber,email,city,zipcode,state,country,gender,username,password from doctor where branch='Ophthalmology' ";
$result=$conn->query($sql);

if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["UG"]."</td><td>".$row["PG"]."</td><td>".$row["branch"]."</td><td>".$row["mobilenumber"]."</td><td>".$row["email"]."</td><td>".$row["city"]."</td><td>".$row["zipcode"]."</td><td>".$row["state"]."</td><td>".$row["country"]."</td><td>".$row["gender"]."</td><td>".$row["username"]."</td><td>".$row["password"]."</td></tr>";
	}
	echo"</table>";
}
else
{
	echo " 0 result";
}
$conn->close();
?>
</table>
<center>
	<br>
	<br>
	<br>
	<br>
	<form action="aauth.php">
		<button>
			Back to panel
		</button>
	</form>
</center>
</body>
</html>