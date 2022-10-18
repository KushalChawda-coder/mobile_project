<?php
include "header.php";

$id=$_GET['id'];
$_SESSION["product_id"]=$id;
$con=mysqli_connect("localhost","root","","rating") or die("query faild ");
$sql="SELECT * FROM product WHERE Product_id=$id;";
$result=mysqli_query($con, $sql);
$value=mysqli_fetch_ASSOC($result);
  // print_r($value);
if (mysqli_num_rows($result) > 0) {
?>

<div class="container mt-4">
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Product</li>
    </ol>
  </nav>

  <div class="card mb-3" >
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./images/<?php echo $value['image'] ?>"  class="card-img-top" alt="...">
    </div>
    <div class="col-md-8 mt-4">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $value['productName'] ?></h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><strong>Brand&nbsp&nbsp&nbsp</strong><?php echo $value['productCompany'] ?></li>
          <li class="list-group-item"><strong>Price&nbsp&nbsp&nbsp&nbsp</strong><?php echo $value['price'] ?></li>
          <li class="list-group-item"><strong>Ram&nbsp&nbsp&nbsp&nbsp&nbsp</strong><?php echo $value['Ram'] ?></li>
        </ul>


        <div class="d-flex justify-content-between align-items-end">
        <p class="h4 mt-5">Ratings & reviews</p>
        <a href="review.php?id=<?php echo $value['Product_id']; ?>" class="btn btn-dark">Rate product</a>
        </div>
        <?php
        $con2=mysqli_connect("localhost","root","","rating") or die("query faild ");
       $sql2="SELECT AVG(rateIndex)  as a FROM stars  WHERE pid=$id;";
       $result2=mysqli_query($con2, $sql2);
       $row2=mysqli_fetch_ASSOC($result2);

         ?>
         <div  style="background: #000; padding: 5px;color:white; width: 178px;">
           <?php for ($i=0; $i < 5; $i++) {
               if ($i <= $row2["a"]) { ?>
                 <i class="fa fa-star fa-2x" style="color:green;" ></i>
             <?php  } else { ?>
                 <i class="fa fa-star fa-2x" ></i>
           <?php  }   }  ?>

         <?php    echo round($row2["a"]+1,2)."/5 average ratings" ?>
         </div>
        <?php
         $con1=mysqli_connect("localhost","root","","rating") or die("query faild ");
        $sql1="SELECT * FROM  stars as s INNER JOIN register as r on r.id=s.rid  WHERE pid=$id;";
        $result1=mysqli_query($con1, $sql1);
        $row=mysqli_fetch_all($result1,MYSQLI_ASSOC);
         // print_r($value); ?>
         <?php
        if (mysqli_num_rows($result) > 0) {
             foreach ($row as $value1) {
               $rate=$value1['rateIndex'];
          ?>
        <div class="d-flex justify-content-between align-items-end">

        </div>
        <div class="mt-5" style="background: #000; padding: 5px;color:white; width: 178px;">
          <?php for ($i=0; $i < 5; $i++) {
              if ($i <= $rate) { ?>
                <i class="fa fa-star fa-2x" style="color:green;" ></i>
            <?php  } else { ?>
                <i class="fa fa-star fa-2x" ></i>
          <?php  }   }  ?>
        </div>

        <p class="card-text h4 mt-2"><?php echo $value1['RCOMMENT'] ?></p>
        <p class="card-text"><small class="text-muted"><?php echo $value1['U_Name'] ?></small></p>
      <?php } } ?>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
<?php } ?>
