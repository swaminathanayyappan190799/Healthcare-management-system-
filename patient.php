<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dateofbirth = $_POST['dateofbirth'];
$email = $_POST['email'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];
$state = $_POST['state'];
$country = $_POST['country'];
$mobilenumber = $_POST['mobilenumber'];
$gender = $_POST['gender'];
$username = $_POST['username'];
$password = $_POST['password'];
$squestion = $_POST['squestion'];
$answer = $_POST['answer'];


if (!empty($firstname) || !empty($lastname) || !empty($dateofbirth) || !empty($email) || !empty($address) || !empty($city) || !empty($zipcode) || !empty($state) || !empty($country) || !empty($mobilenumber) || !empty($gender) || !empty($username) || !empty($password) || !empty($squestion) || !empty($answer))
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
  $SELECT = "SELECT email From patient Where email = ? Limit 1";
  $INSERT = "INSERT Into patient (firstname, lastname, dateofbirth, email, city, zipcode, state, country, mobilenumber, gender, username, password, squestion, answer)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

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
      $stmt->bind_param("sssssississsss",$firstname,$lastname,$dateofbirth,$email,$city,$zipcode,$state,$country,$mobilenumber,$gender,$username,$password,$squestion,$answer);
      $stmt->execute();
      echo "Congratulations !! you have successfully enrolled into our services,We welcome you ".$firstname;
     } 
     else 
     {
      echo "Oops !!..it seems like someone was already register using this email sorry for the inconvenience ".$firstname;
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
    <form action="Mark_1.html">
    <button>
      Click here to login
    </button>
  </form>
</center>
</body>
</html>