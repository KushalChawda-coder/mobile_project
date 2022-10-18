<?php include "header.php";
$id=$_GET["id"];
if (isset($_SESSION["name"])) {
    $uid=$_SESSION["u_id"];
   ?>
<div class="container">
  <nav  class="mt-4" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item" aria-current="page"><a href="Ratings.php?id=<?php echo $id; ?>">Product</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ratings & review</li>
    </ol>
  </nav>
   <div class="row justify-content-center">

      <div class="col-md-6">
        <?php  if (isset($_SESSION["onereview"])) { ?>
        <div class="alert alert-success d-flex justify-content-end success" role="alert">
        <?php echo $_SESSION["onereview"];
         unset($_SESSION['onereview']);
        ?>
        </div>

        <h1 class="display-3 mt-5 text-center">Review & ratings</h1>
      <?php  }
      $con=mysqli_connect("localhost","root","","rating") or die("query faild ");
      $sql="SELECT * FROM product where Product_id=$id;";
      $result=mysqli_query($con, $sql);
      $row=mysqli_fetch_assoc($result);
       ?>
        <ul class="list-group list-group-flush mt-5 mb-3">

          <li class="list-group-item"><strong>Brand&nbsp&nbsp&nbsp</strong><?php echo $row['productCompany']; ?></li>
          <li class="list-group-item"><strong>Name&nbsp&nbsp&nbsp</strong><?php echo $row['productName']; ?></li>
          <li class="list-group-item"><strong>Ram&nbsp&nbsp&nbsp&nbsp&nbsp</strong><?php echo $row['Ram']; ?></li>
        </ul>

        <div align="center" style="background: #000; padding: 50px;color:white;">
            <i class="fa fa-star fa-2x" data-index="0"></i>
            <i class="fa fa-star fa-2x" data-index="1"></i>
            <i class="fa fa-star fa-2x" data-index="2"></i>
            <i class="fa fa-star fa-2x" data-index="3"></i>
            <i class="fa fa-star fa-2x" data-index="4"></i>

        </div>
        <form action="reviewcode.php" method="get" class="row g-3 needs-validation mt-3" novalidate>
          <input type="number"  id="id" value="<?php echo $id; ?>" name="id" hidden>
          <input type="number"  id="index1" value="" name="index" hidden>
          <input type="number"   value="<?php echo $id; ?>" name="id" hidden>
          <input type="number"   value="<?php echo $uid; ?>" name="uid" hidden>


        <div class="form-floating">
          <textarea class="form-control" name="maincomment" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
          <label for="floatingTextarea2">review</label>
          <div class="valid-feedback">
           Looks good!
         </div>
        </div>
        <div class="d-grid gap-2 mt-5 mb-5" style="height:55px;font-size:xx-large;font-weight: bold;" required>
        <button class="btn btn-dark" type="submit">Submit your Ratings & Review</button>
      </div>
      </form>
      </div>

    </div>



  </div>
  <script type="text/javascript">
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {

    form.addEventListener('submit', event => {
        console.log(event)
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
  </script>
  <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
  <script>
      var ratedIndex = -1;

      $(document).ready(function () {
          resetStarColors();

          if (localStorage.getItem('ratedIndex') != null) {
              setStars(parseInt(localStorage.getItem('ratedIndex')));
              uID = localStorage.getItem('uID');
          }

          $('.fa-star').on('click', function () {
             ratedIndex = parseInt($(this).data('index'));
             localStorage.setItem('ratedIndex', ratedIndex);
             // console.log(ratedIndex)
             $('#index1').val(ratedIndex)

          });

          $('.fa-star').mouseover(function () {
              resetStarColors();
              var currentIndex = parseInt($(this).data('index'));
              setStars(currentIndex);
          });

          $('.fa-star').mouseleave(function () {
              resetStarColors();
              if (ratedIndex != -1)
                  setStars(ratedIndex);
          });
      });
      function setStars(max) {
          for (var i=0; i <= max; i++)
              $('.fa-star:eq('+i+')').css('color', 'green');
      }

      function resetStarColors() {
          $('.fa-star').css('color', 'white');
      }

  </script>
</body>
</html>
<?php  } else{
   header("location: http://localhost/mobile%20project/login.php");
    $_SESSION["review_page"]=true;
}
