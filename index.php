<?php include "header.php";

//this is index page.d
$con=mysqli_connect("localhost","root","","rating") or die("query faild ");
$sql="SELECT * FROM product;";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_all($result,MYSQLI_ASSOC);

// print_r($row);
if (mysqli_num_rows($result) > 0) {
?>

<div class="container mt-5  d-flex justify-content-between">
  <div class="row d-flex justify-content-between">
    <?php foreach ($row as $value) { ?>
    <div class="col-md-4">
      <div class="card mb-5" style="width: 18rem;">
        <img src="./images/<?php echo $value['image'] ?>" style="height:280px;!important" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> <?php echo $value['productName'] ?></h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><strong>Brand&nbsp&nbsp&nbsp</strong><?php echo $value['productCompany'] ?></li>
          <li class="list-group-item"><strong>Price&nbsp&nbsp&nbsp&nbsp</strong><?php echo $value['price'] ?></li>
          <li class="list-group-item"><strong>Ram&nbsp&nbsp&nbsp&nbsp&nbsp</strong><?php echo $value['Ram'] ?></li>
        </ul>
        <?php
          $pid=$value['Product_id'];
        $con2=mysqli_connect("localhost","root","","rating") or die("query faild ");
       $sql2="SELECT AVG(rateIndex)  as a FROM stars  WHERE pid=$pid;";
       $result2=mysqli_query($con2, $sql2);
       $row2=mysqli_fetch_ASSOC($result2);

         ?>
         <div  style="background: #000; padding: 10px 50px;color:white; width: 286.7px;">
           <?php for ($i=0; $i < 5; $i++) {
               if ($i <= $row2["a"]) { ?>
                 <i class="fa fa-star fa-2x" style="color:green;" ></i>
             <?php  } else { ?>
                 <i class="fa fa-star fa-2x" ></i>
           <?php  }   }  ?>

         <?php    echo round($row2["a"]+1,2)."/5 average ratings" ?>
         </div>
    <div class="card-footer align-items-center" style="height:150px;">
      <?php
      $pid=$value['Product_id'];
      $sql1="SELECT * FROM product as p  join stars as s on p.Product_id=s.pid join register as r on r.id=s.rid where Product_id=$pid LIMIT 1";
      $result1=mysqli_query($con, $sql1);
      ?>
      <blockquote class="blockquote mb-0 ">
        <?php while ($row1=mysqli_fetch_ASSOC($result1) ) { ?>
     <p style="font-size:15px;"><?php $text=$row1['RCOMMENT']; echo substr_replace($text, "...", 100)?></p>
       <footer class="blockquote-footer"><cite title="Source Title"><?php echo $row1['U_Name'];?></cite></footer>
     </blockquote>
      <a href="Ratings.php?id=<?php echo $value['Product_id'];?>" class="card-link">Read more</a>
    <?php } ?>
    </div>
    </div>
  </div>
  <?php    } ?>
  </div>
</div>
</body>
</html>
<?php
}
?>
