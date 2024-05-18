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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" >

<meta charset="utf-8">
<meta name = "viewport" content="width=device-width, initial-scale=1"> 
	<title>Registration</title>
</head>
<body>

<section class="sign_img">
	<br><br><br>
	<div class="signUpBox">
		<br><br>
					<h1 class="signText1">Library Management System</h1><br>
					<h1 class="signText2">User Registration Form</h1><br>

					<form name="signup" action="" method="post">
				
					<input type="text" name="firstname" placeholder="First Name" required=""><br><br>
					<input type="text" name="lastname" placeholder="Last Name" required=""><br><br>
					<input type="text" name="username" placeholder="Username" required=""><br><br>

						<input type="password" name="password" placeholder="Password" required=""><br><br>

					<input type="text" name="roll" placeholder="Roll no" required=""><br><br>

					<input type="text" name="email" placeholder="Email" required=""><br><br>

					<input type="text" name="contact" placeholder="Phone No." required=""><br><br>

				
					<input class="btn btn-default" type="submit" name="submit" value="Sign Up">
					
				</form>
				</div>
</section>
 <?php

      if(isset($_POST['submit']))
      {
        $count=0;

        $sql="SELECT username from `student`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db, "INSERT INTO `STUDENT`VALUES('$_POST[firstname]','$_POST[lastname]', '$_POST[username]', '$_POST[password]', '$_POST[roll]', '$_POST[email]', '$_POST[contact]', 'p.jpg');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>


</body>
</html>

