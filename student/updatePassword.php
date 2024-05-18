<?php
include "connection.php";
include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
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
	<title>Change Password</title>
</head>
<body class="changepass">
	<div class="cwrapper">
		<div>
			<h1>Change Your Password</h1>

			<form action="" method="post">
				<input type="text" name= "username" class="form-control" placeholder="Username" required="" style="margin-top: 40px;"><br>

				<input type="text" name= "email" class="form-control" placeholder="Email" required=""><br>

				<input type="text" name= "password" class="form-control" placeholder="New Password" required=""><br>

				<button class="btn btn-default" type="submit" name="submit">Update</button>
			</form>
		</div>
	</div>

	<?php 	

		if (isset($_POST['submit']))
		{
	$sql = mysqli_query($db, "UPDATE student SET password='$_POST[password]' WHERE username = '$_POST[username]' AND email ='$_POST[email]' ;");	
	{
		?>
		<script type="text/javascript">
			alert("The Password Updated Successfully")
		</script>
		<?php 
	};
		};
		else
		{
			echo "string";
		}

	 ?>
</body>
</html>