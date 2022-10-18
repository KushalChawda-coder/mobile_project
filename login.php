<?php include "header.php" ?>

<div class="container">
   <div class="row justify-content-center">
     <div class="col-md-6">
        <?php  if (isset($_SESSION["name"])) { ?>
        <div class="alert alert-success d-flex justify-content-end success" role="alert">
        <?php echo $_SESSION["name"];
        unset($_SESSION['name']);
        ?>
        </div>
      <?php  }  ?>

      <?php  if (isset($_SESSION["error"])) { ?>
      <div class="alert alert-danger d-flex justify-content-end success" role="alert">
      <?php echo $_SESSION["error"];
        unset($_SESSION['error']);
     ?>
      </div>
    <?php  }  ?>



        <h1 class="display-3 mt-5 text-center">LOG IN</h1>
        <form action="logincode.php" method="post" class="row g-3 needs-validation" novalidate>
        <div class="form-floating mb-3 mt-5">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
        <label for="floatingInput">Email address</label>
        <div class="valid-feedback">
         Looks good!
       </div>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
        <div class="invalid-feedback">
        please put password
       </div>
      </div>
      <div class="d-grid gap-2 mt-5" style="height:55px;font-size:xx-large;font-weight: bold;">
      <button class="btn btn-dark" type="submit">LOG IN</button>
    </div>
    </form>
    <div class="card-footer mt-5 d-flex justify-content-center">
      <p class="card-text">Don't have an account &nbsp&nbsp</p>
      <a href="signup.php" class="card-link">Sign in</a>
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
</body>
</html>
