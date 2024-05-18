<?php
include "connection.php";
include "navbar.php";
?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>


	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" >



<meta charset="utf-8">
<meta name = "viewport" content="width=device-width, initial-scale=1"> 
	<title>Student Login</title>
</head>
<body>
<section class="log_img">
	<br><br><br>
	<div class="loginBox">
		<br><br>
					<h1 class="LoginText1">Library Management System</h1><br><br>
					<h1 class="LoginText2">User Login Form</h1><br>
					<form name="login" action="" method="post">
				
					<input type="text" name="username" placeholder="Username" required=""><br><br>
					<input type="password" name="password" placeholder="Password" required=""><br><br>
					<input class="btn btn-default" type="submit" name="submit" value="Login" style="background-color: white;"></input>
					<a href="updatePassword.php">Forgot password?</a>
					<p >New to this site?</p>
					<a class="connect" href="registration.php">Sign Up</a>
					
				</form>
				</div>
</section>

	<?php

    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM admin WHERE username='$_POST[username]' && password='$_POST[password]';");

       $row= mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
              
              <script type="text/javascript">
                alert("The username and password doesn't match.");
              </script> 
              
      <!--     <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
            <strong>The username and password doesn't match</strong>
          </div>     -->
        <?php
      }
      else
      {
        $_SESSION['login_user'] = $_POST['username'];
        $_SESSION['pic']= $row['pic'];
 
        ?>
          <script type="text/javascript">
            window.location="index.php"
          </script>
        <?php
      }
    }

  ?>

</body>
</html>