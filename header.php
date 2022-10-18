
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="style.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <div class="d-flex align-items-center">
      <a class="navbar-brand" href="index.php"><i class="fa fa-mobile fa-2x"></i></a>
    <a class="navbar-brand" href="index.php"></i>Mobile details & reviews</a>
    </div>


    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
      <div class="text-white pe-3 ">
        <?php
        session_start(); if (isset($_SESSION["name"])) {
         echo "Hello, ".$_SESSION["welcome_name"]; ?>
         <a href="logout.php" class="btn btn-outline-light" type="submit">LOG OUT</a>
    <?php  } else { ?>
         <a href="login.php" class="btn btn-outline-light" type="submit">LOG IN</a>
    <?php  } ?>
      </div>


    </div>
  </div>
</nav>
