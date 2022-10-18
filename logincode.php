<?php

$id=$_GET['id'];
$email=$_POST["email"];
$password=$_POST["password"];
$con=mysqli_connect("localhost","root","","rating") or die("query faild ");
$sql="SELECT * from register where Email='$email' and Password='$password'";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);
  session_start();
if (mysqli_num_rows($result) > 0) {

  echo $row['U_name'];
  $_SESSION["name"]="you have done sucessfully login";
  $_SESSION["welcome_name"]=$row["U_Name"];
  $_SESSION["u_id"]=$row["id"];
  if (isset($_SESSION["review_page"]) != false) {
    $pid=$_SESSION["product_id"];
    header("location: http://localhost/mobile%20project/review.php?id=$pid");
  } else {
       header("location: http://localhost/mobile%20project/login.php");
  }

} else {
      $_SESSION["error"]="sorry please try again !";
      header("location: http://localhost/mobile%20project/login.php");
}
 ?>
