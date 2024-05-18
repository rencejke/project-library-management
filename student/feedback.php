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

	<title></title>
</head>
<body class="feed">

		<div class="fwrapper">
	<h4>If you have any suggestion just comment below</h4>	
	<form style="" action="" method="post">
		
		<input class="commentstyle" type="text" name="comment" placeholder="Write something......"><br><br>
		<input 	class="btn btn-default commentbutton" type="submit" name="submit" value="Comment" style="background-color: white;">

	</form>
	<br> <br>
<div class="phptable">
	<?php 

		if (isset($_POST['submit'])) 
		{
			$sql = "INSERT INTO `comments` VALUES('', '$_SESSION[login_user]', '$_POST[comment]');";
			if(mysqli_query($db,$sql));
			{
				$q = "SELECT * FROM `comments` ORDER by `comments`.`id`DESC";
				$res = mysqli_query($db,$q);


			echo "<table class='table table-bordered'>";
			while ($row=mysqli_fetch_assoc($res)) 
			{
	
				echo "<tr>";


				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['comment']; echo "</td>";

				echo "</tr>";
			}


			}
		}
		else
		{

				$q = "SELECT * FROM `comments` ORDER by `comments`.`id`DESC";
				$res = mysqli_query($db,$q);


			echo "<table class='table table-bordered'>";
			while ($row=mysqli_fetch_assoc($res)) 
			{
				echo "<tr>";

					echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['comment']; echo "</td>";

				echo "</tr>";
			}

		}
	 ?>
			
			</div>
				</div>
</body>
</html>