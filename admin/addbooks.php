<?php
include "connection.php";
include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
	body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
  background-color: #024629;
  color: white;
}

.sidenav {
  height: 100%;
  margin-top: 50px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.h:hover
{
color: white;
width: 300px;
height: 50px;
background-color: #00544c;
}
.bookadd
{
  width: 400px;
  margin: 0px auto;
}
.form-control
{
  background-color: #080707;
  color: white;
}
</style>
<body>
<!-- -------------------sidenav------------------ -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>


  	<div style="color: white; margin-left: 80px; padding-bottom: 10px; font-size20px;">
  		<?php 

  		 echo "<img class='img-circle profile_img' height=100 width=100 padding= 5px src='image/".$_SESSION['pic']."'>";
  		 	echo "<br> <br>";

                        echo "Welcome"." ".$_SESSION['login_user']; 

  		 ?>
  	</div>

   <a class="h" href="addbooks.php">Add Books</a>
  <a class="h" href="request.php">Books Requested</a>
  <a class="h" href="issue_information.php">Issue Information</a>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" color= "white"; onclick="openNav()">&#9776;</span>

  <div class="container">
    <h2 style="text-align:center; padding-bottom: 10px;">Add New Books</h2>

    <form class="bookadd" action="" method ="post" >

      <input type="text" name="bid" class="form-control" placeholder="Book ID" required="">
      <br>
      <input type="text" name="name" class="form-control" placeholder="Book Name">
      <br>
      <input type="text" name="authors" class="form-control" placeholder="Authors Name" required="">
      <br>
      <input type="text" name="edition" class="form-control" placeholder="Edition" required="">
      <br>
      <input type="text" name="status" class="form-control" placeholder="Status" required="">
      <br>
      <input type="text" name="quantity" class="form-control" placeholder="Quantity" required="">
      <br>
      <input type="text" name="department" class="form-control" placeholder="Department" required="">
      <br>
      <button class="btn btn-default" type="submit" name="submit" style="background-color:white;">ADD</button>
    </form>
  </div>

  <?php 

  if (isset($_POST['submit']))
  {
    if (isset($_SESSION['login_user'])) 
    {
        mysqli_query($db, "INSERT INTO books VALUES('$_POST[bid]', '$_POST[name]', '$_POST[authors]', '$_POST[edition]', '$_POST[status]', '$_POST[quantity]', '$_POST[department]');");

          ?>
          <script type="text/javascript">
            alert("Book Added Successfully");
          </script>

            <?php
    }
    else
    {
      ?>

        <script type="text/javascript">
           alert("You need to login first");
        </script>
        <?php  
    }
  }


   ?>


</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "#024629";
}
</script>