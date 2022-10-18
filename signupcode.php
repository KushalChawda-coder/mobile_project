<?php
$con=mysqli_connect("localhost","root","","rating") or die("query faild ");
$name=mysqli_real_escape_string($con, $_GET["name"]);
$email=mysqli_real_escape_string($con, $_GET["email"]);
$password=mysqli_real_escape_string($con, $_GET["password"]);
// $C_password=$_GET["C_password"];


$sql="INSERT into register (U_name,Password,Email) values ('$name','$password','$email')";
if (mysqli_query($con, $sql)) {
  header("location: http://localhost/mobile%20project/login.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
 ?>
