<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" >

<meta charset="utf-8">
<meta name = "viewport" content="width=device-width, initial-scale=1"> 

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
	<title></title>
</head>


    <?php   
    
    if (isset($_SESSION['login_user'])) 
    {?>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Online Library Management System</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="books.php">Books</a>
        <a class="nav-link" href="feedback.php">Feedback</a>
        <a class="nav-link" href="profile.php">Profile</a>
      </div>
    </div>



    <div class="d-flex align-items-center">
         <a href="" style="text-decoration: none;"><div style="color: white;">
           <?php 
           echo "<img class='img-circle profile_img' height=30 width=30 padding= 5px src='image/".$_SESSION['pic']."'>";

              echo " ".$_SESSION['login_user']; 
            ?>


         </div></a>
         <button type="button" class="btn btn-link px-3 me-2">
          <a class="loginstyle "href="logout.php" style="text-transform: uppercase; text-decoration: none; tetxd">Logout</a>
        </button>
      </div>
         </div>
   </nav>   
     
    <?php
  }
  else
  {?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Online Library Management System</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="books.php">Books</a>
        <a class="nav-link" href="feedback.php">Feedback</a>
      </div>
    </div>



    <div class="d-flex align-items-center">
        <button type="button" class="btn btn-link px-3 me-2">
          <a class="loginstyle "href="StudentLogin.php">Login</a>
        </button>
        <button type="button" class="btn btn-primary me-3">
          <a class = "signUpSTyle" href="registration.php">Sign up</a>
        </button>
        <a
          class="btn btn-dark px-3"
          href="https://github.com/mdbootstrap/mdb-ui-kit"
          role="button"
          ><i class="fab fa-github"></i
        ></a>
      </div>
         </div>
   </nav>   
  <?php
}
?>
     
<body>

</body>
</html>