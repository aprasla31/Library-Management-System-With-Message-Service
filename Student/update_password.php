<?php
	include "connection.php";
	include "navbar.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> CHANGE PASSWORD </title>

	<style type="text/css">
		body
		{
			
			height: 450px;
			background-color: red;
			background-image: url("images/7.jpg");
			background-repeat: no-repeat;
		}
		.wrapper
		{
			width: 400px;
			height: 400px;
			margin: 100px auto;
			background-color: black;
			opacity: .8;
			color: wheat;
			padding: 28px 14px;
		}
		.form-control
		{
			width: 300px;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div style="text-align:center;">
		
			<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Change Your Password</h1>

		</div>
		<div style="padding-left: 30px;">
		<form action="" method="post">
			<input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
			<input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
			<input type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
			<button class="btn btn-default" type="submit" name="submit">Update</button>
		</form>
		</div>
	</div>
	<?php

		if (isset($_POST['submit'])) 
		{
			$sql=mysqli_query($db, "UPDATE student SET password='$_POST[password]' WHERE username= '$_POST[username]' AND email='$_POST[email]';");
		}
	?>
</body>
</html>