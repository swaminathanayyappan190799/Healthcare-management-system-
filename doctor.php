<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$UG = $_POST['UG'];
$PG = $_POST['PG'];
$branch = $_POST['branch'];
$dateofbirth = $_POST['dateofbirth'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];
$state = $_POST['state'];
$country = $_POST['country'];
$gender = $_POST['gender'];
$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($firstname) || !empty($lastname) || !empty($UG) || !empty($PG) || !empty($branch) || !empty($dateofbirth) || !empty($mobilenumber) || !empty($email) || !empty($city) || !empty($zipcode) || !empty($state) || !empty($country) || !empty($gender) || !empty($username) || !empty($password))
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "healthcare";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error())
{
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else
{
  $SELECT = "SELECT email From doctor Where email = ? Limit 1";
  $INSERT = "INSERT Into doctor (firstname, lastname, UG, PG, branch, dateofbirth, mobilenumber, email, city, zipcode, state, country, gender, username, password)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

      if ($rnum==0) 
      {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssssississsss",$firstname,$lastname,$UG,$PG,$branch,$dateofbirth,$mobilenumber,$email,$city,$zipcode,$state,$country,$gender,$username,$password);
      $stmt->execute();
      echo "We are very priveliged to welcome you Dr.".$firstname;
     } 
     else 
     {
      echo "Oops !! sorry for the inconvenience doctor , Someone was already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} 
else 
{
 echo "All field are required";
 die();
}

?>
<html>
<head>
	</head>
	<body>
		<center>
		<form action="Mark_3.html">
		<button>
			Click here to login
		</button>
	</form>
</center>
</body>
</html>