<html>
<head>
<title>Updation of records</title>
</head>
<body>
<?php
$email = $_POST['email'];
$answer = $_POST['answer'];

$con=mysqli_connect('localhost','root','');
 
	mysqli_select_db($con,'healthcare');

	$sql = "select firstname,lastname,dateofbirth,email,city,zipcode,state,country,mobilenumber,gender,username,password from patient at where email='$email' && answer = '$answer' ";

	$patient=mysqli_query($con,$sql);  
	?>
	<table>
		<tr>
			<th>firstname</th>
			<th>lastname</th>
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
		</tr>
		<?php
		while($row=mysqli_fetch_array($patient))
		{
			echo"<tr><form action=update.php method=post>";
			echo "<td><input type=text name=firstname value='".$row['firstname']."'></td>";
		    echo "<td><input type=text name=lastname value='".$row['lastname']."'></td>";
     		echo "<td><input type=date name=dateofbirth value='".$row['dateofbirth']."'></td>";
            echo "<td><input type=text name=email value='".$row['email']."'></td>";
            echo "<td><input type=text name=city value='".$row['city']."'></td>";
   			echo "<td><input type=number name=zipcode value='".$row['zipcode']."'></td>";
 			echo "<td><input type=text name=state value='".$row['state']."'></td>";
			echo "<td><input type=text name=country value='".$row['country']."'></td>";
			echo "<td><input type=number name=mobilenumber value='".$row['mobilenumber']."'></td>";
			echo "<td><input type=text name=gender value='".$row['gender']."'></td>";
			echo "<td><input type=text name=username value='".$row['username']."'></td>";
			echo "<td><input type=password name=password value='".$row['password']."'></td>";
			echo"<td><input type=submit>";
            echo"</form></tr>";
		}
?>
<center>
	<form action="pwindow.html">
		<button>
			abort updation
		</button>
	</form>
</center>
</body>
</html>
