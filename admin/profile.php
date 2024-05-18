<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>

	<title>Profile</title>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
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
</head>
<body style="background-color: #004528;">
<div class="container">

	<form action="" method="post">
	<button class="btn btn-default" style="float: right; width: 70px; background-color: white;" name="submit1" type="submit1" href="edit.php">Edit</button>		
	</form>
	<div class="p">
		
		<?php 

					if(isset($_POST['submit1']))
 				{
 					?>
 						<script type="text/javascript">
 							window.location="edit.php";
 						</script>
 					<?php
 				}

			$q = mysqli_query($db, "SELECT * FROM admin where username ='$_SESSION[login_user]';");

		 ?>
		 <h2 style="text-align: center; color: white;">My Profile</h2>

		 	<?php 

		 		$row = mysqli_fetch_assoc($q);

echo "<div style='text-align: center'> <img class='img-circle profile-img' src='image/".$_SESSION['pic']." '> </div>";
		 	 ?>
		 	 <div style="text-align: center; color:white; font-size: 30px; margin-top: 10px;"><b>Welcome, </b>

		 	 <h4>
		 	 	<?php 

		 	 	echo $_SESSION['login_user'];  
		 	 	 ?>
		 	 </h4>
		 	</div>	

		 	<?php 

		 	echo "<table style='color:white;' class='table table-bordered'>";
		 	echo "<tr>"; //first

		 	echo "<td>";
		 	echo "<b> First Name: </b>";
		 	echo "</td>";

		 	echo "<td>";
		 	echo $row['firstname'];
		 	echo "</td>";

		 	echo "</tr>";

		 	echo "<tr>"; //2nd
		 	
		 	echo "<td>";
		 	echo "<b> Last Name: </b>";
		 	echo "</td>";

		 	echo "<td>";
		 	echo $row['lastname'];
		 	echo "</td>";

		 	echo "</tr>";

		 	echo "<tr>"; //3rd
		 	
		 	echo "<td>";
		 	echo "<b> Username: </b>";
		 	echo "</td>";

		 	echo "<td>";
		 	echo $row['username'];
		 	echo "</td>";

		 	echo "</tr>";

		 	echo "<tr>"; //fourth

		 	echo "<td>";
		 	echo "<b> Password: </b>";
		 	echo "</td>";

		 	echo "<td>";
		 	echo $row['password'];
		 	echo "</td>";

		 	echo "</tr>";

		 	echo "<tr>"; //sixth
		 	
		 	echo "<td>";
		 	echo "<b> Email: </b>";
		 	echo "</td>";

		 	echo "<td>";
			echo $row['email'];
		 	echo "</td>";

		 	echo "</tr>";

		 	echo "<tr>"; //seventh
		 	
		 	echo "<td>";
		 	echo "<b> Contact: </b>";
		 	echo "</td>";

		 	echo "<td>";
		 	echo $row['contact'];
		 	echo "</td>";

		 	echo "</tr>";
		 	echo "</table>";



		 	 ?>
	</div>
</div>
</body>
</html>