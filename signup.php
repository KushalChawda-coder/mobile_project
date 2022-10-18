<?php include "header.php" ?>
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-6">
        <h1 class="display-3 mt-5 text-center">Sign In</h1>
        <form action="signupcode.php" method="get" class="row g-3 needs-validation" novalidate>
          <div class="form-floating mb-3 mt-5">
          <input type="text" name="name" class="form-control" id="floatingInput1" placeholder="name@example.com" required>
          <label for="floatingInput1">User name</label>
          <div class="valid-feedback">
           Looks good!
         </div>
        </div>

        <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
        <label for="floatingInput">Email address</label>
        <div class="valid-feedback">
         Looks good!
       </div>
      </div>
      <div class="form-floating mb-3">
        <input type="password" name="password" id="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
        <div class="invalid-feedback">
          Please put a password.
        </div>
      </div>

      <div class="form-floating">
        <input type="password" name="C_password" id="cpassword" class="form-control" id="floatingPassword1" placeholder="Password" required>
        <label for="floatingPassword1">confirm Password</label>

        <div class="alert alert-danger d-flex align-items-center" id="alert"  role="alert" style="visibility:hidden;height:0px; ">
      <div><i class="fa fa-warning"> </i>
      Password are not matching !!
      </div>
      </div>
      <div class="d-grid gap-2 mt-5 mb-5" style="height:55px;font-size:xx-large;font-weight: bold;" required>
      <button class="btn btn-dark"  type="submit">Create an account</button>
    </div>
    </form>

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
      var p=document.getElementById("password").value;

      console.log(p);
     console.log(c);
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
  var c=document.getElementById("cpassword");
  c.addEventListener('keyup',event =>{
      var p=document.getElementById("password").value;
      var c=document.getElementById("cpassword").value;
      var alert=document.getElementById("alert");

      if(p !== c)  {
          event.preventDefault()
        alert.style.transition = "all 2s ease-in-out";
        alert.style.height = "80px";
          alert.style.visibility = "visible";
      } else {
        alert.style.transition = "all 2s ease-in-out";
        alert.style.height = "0px";
        alert.style.visibility = "hidden";
      }

  })

})()
  </script>
</body>
</html>
