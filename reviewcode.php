<?php
$con=mysqli_connect("localhost","root","","rating") or die("query faild ");
$id=$_GET['id'];
$uid=$_GET['uid'];
$name=$_GET["index"];
 $maincomment=mysqli_real_escape_string($con, $_GET['maincomment']);
// $maincomment=$_GET["maincomment"];

$sql1="SELECT * FROM  stars as s INNER JOIN register as r on r.id=s.rid  WHERE pid=$id and rid=$uid";
$result1=mysqli_query($con, $sql1);
$row=mysqli_fetch_row($result1);
print_r($row);
if($row > 0){
  session_start();
  $_SESSION["onereview"]="you have only one chance review for this product.";
  header("location: http://localhost/mobile%20project/review.php?id=$id");
} else {
    $sql="INSERT into stars (rateIndex,RCOMMENT,pid,rid) values ('$name','{$maincomment}','$id','$uid')";
    if (mysqli_query($con, $sql)) {
       header("location: http://localhost/mobile%20project/Ratings.php?id=$id");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

 ?>
