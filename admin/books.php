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
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>

<!-- ---------------------searchbar------------------------- -->

	<section id="search">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="search">
		<form class="navbar-form" method="post" method="form1">
			<div>
				<input class="" type="text" name="search" placeholder="Search for Books">

				<button type="submit" name="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
			</div>
		</form>

		<form class="navbar-form" method="post" method="form1">
			<div>
				<input class="" type="text" name="bid" placeholder="Enter Book ID" required= "">

				<button type="submit" name="submit1" class="btn btn-default">Delete</button>
			</div>
		</form>
	</div>
				</div>
			</div>
		</div>
	</section>

<!-- ---------------------searchbar end------------------------- -->
	<h2>List of Books</h2>
	<?php

	if (isset($_POST['submit'])) 
	{
		$q = mysqli_query($db, "SELECT * from books where name like '%$_POST[search]%' ");


		if (mysqli_num_rows($q)==0)
		 {
			echo "Sorry! No books found. Try searching again.";
		}
		else
		{
			echo "<table class='table table-bordered table-hover' >";
	echo "<tr style='background-color: #6db6b9e6;'>";
	echo "<th>"; echo "ID"; echo "</th>";
	echo "<th>"; echo "Books-Name";	echo "</th>";
	echo "<th>"; echo "Authors-Name";	echo "</th>";
	echo "<th>"; echo "Edition";	echo "</th>";
	echo "<th>"; echo "Status";	echo "</th>";
	echo "<th>"; echo "Quantity";	echo "</th>";
	echo "<th>"; echo "Department";	echo "</th>";
	echo "</tr>";
	
while($row=mysqli_fetch_assoc($q))
{
	echo "<tr>";
echo "<td>"; echo $row['bid']; echo "</td>";
echo "<td>"; echo $row['name']; echo "</td>";
echo "<td>"; echo $row['authors']; echo "</td>";
echo "<td>"; echo $row['edition']; echo "</td>";
echo "<td>"; echo $row['status']; echo "</td>";
echo "<td>"; echo $row[ 'quantity']; echo "</td>";
echo "<td>"; echo $row[ 'department']; echo "</td>";
echo "</tr>";

}
echo "</table>";
		}
	}

	//IF BUTTON NOT PRESS //

else
{
	$res=mysqli_query ($db, "SELECT * FROM books;");

echo "<table class='table table-bordered table-hover' >";
	echo "<tr style='background-color: #6db6b9e6;'>";
	echo "<th>"; echo "ID"; echo "</th>";
	echo "<th>"; echo "Books-Name";	echo "</th>";
	echo "<th>"; echo "Authors-Name";	echo "</th>";
	echo "<th>"; echo "Edition";	echo "</th>";
	echo "<th>"; echo "Status";	echo "</th>";
	echo "<th>"; echo "Quantity";	echo "</th>";
	echo "<th>"; echo "Department";	echo "</th>";
	echo "</tr>";
	
while($row=mysqli_fetch_assoc($res))
{
	echo "<tr>";
echo "<td>"; echo $row['bid']; echo "</td>";
echo "<td>"; echo $row['name']; echo "</td>";
echo "<td>"; echo $row['authors']; echo "</td>";
echo "<td>"; echo $row['edition']; echo "</td>";
echo "<td>"; echo $row['status']; echo "</td>";
echo "<td>"; echo $row[ 'quantity']; echo "</td>";
echo "<td>"; echo $row[ 'department']; echo "</td>";
echo "</tr>";

}
echo "</table>";
}
	if (isset($_POST['submit1']))
	 {
		if (isset($_SESSION['login_user']))
		{
			mysqli_query($db, "DELETE from books where bid = '$_POST[bid]';");
		
			?>
				<script type="text/javascript">
					alert("Deleted Successfully");
				</script>
			<?php
		}

			else
	{
			?>
				<script type="text/javascript">
					alert("Please Login");
				</script>
			<?php
	}


	}




	  ?>
</div>
</body>
</html>