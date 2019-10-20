<!DOCTYPE html>
<html>
<head>
	<title>Deletion of Patient records</title>
</head>
<body>
<table border=1 cellpading=1 cellspacing=1>
	<tr>
	<th>firstname</th>	
    <th>lastame</th>
    <th>dateofbirth</th>
    <th>email</th>
    <th>city</th>
    <th>zipcode</th>
    <th>state</th>
    <th>country</th>
    <th>mobilenumber</th>
    <th>gender</th>
    <th>username</th>
    <th>password</th>
    <th>squestion</th>
    <th>answer</th>
    <th>Action</th>
</tr>
<?php
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'healthcare');
 
 $sql="SELECT * FROM patient";

 $records=mysqli_query($con,$sql);

 while($row=mysqli_fetch_array($records))
 {
 	echo"<tr>";
 	echo"<td>".$row['firstname']."</td>";
 	echo"<td>".$row['lastname']."</td>";
 	echo"<td>".$row['dateofbirth']."</td>";
 	echo"<td>".$row['email']."</td>";
 	echo"<td>".$row['city']."</td>";
 	echo"<td>".$row['zipcode']."</td>";
 	echo"<td>".$row['state']."</td>";
 	echo"<td>".$row['country']."</td>";
    echo"<td>".$row['mobilenumber']."</td>";
 	echo"<td>".$row['gender']."</td>";
 	echo"<td>".$row['username']."</td>";
 	echo"<td>".$row['password']."</td>";
    echo"<td>".$row['squestion']."</td>";
    echo"<td>".$row['answer']."</td>";
    echo"<td><a href=deletion1.php?firstname=".$row['firstname'].">Delete</a></td>";
 }
?>
</table>
<br>
<br>
<center>
	<form action="awindow.html">
	<button>
		Abort deletion
	</button>
</form>
</center>
</body>
</html>