<?php
$name = $_POST['name'];
$department = $_POST['department'];
$email = $_POST['email'];
$mobilenumber = $_POST['mobilenumber'];
$gender = $_POST['gender'];
$username = $_POST['username'];
$password = $_POST['password'];


if (!empty($name) || !empty($department) || !empty($email) || !empty($mobilenumber) || !empty($gender) || !empty($username) || !empty($password))
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
  $SELECT = "SELECT email From admin Where email = ? Limit 1";
  $INSERT = "INSERT Into admin (name, department, email, mobilenumber, gender, username, password)values(?,?,?,?,?,?,?)";

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
      $stmt->bind_param("sssisss",$name,$department,$email,$mobilenumber,$gender,$username,$password);
      $stmt->execute();
      echo "We welcome you the administrator of ".$department;
     } 
     else 
     {
      echo "Oops !!..it seems like someone was already register using this email";
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
    <form action="Mark_4.html">
    <button>
      Click here to login
    </button>
  </form>
</center>
</body>
</html>