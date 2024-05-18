<?php 
session_start();

if (isset($_SESSION['login_user'])) 
{
	unset($_SESSION['login_user']);
}
header("location:index.php");

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

</body>
</html>