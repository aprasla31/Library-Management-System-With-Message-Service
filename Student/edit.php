<?php
	include "navbar.php";
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	<style type="text/css">
		.form-control
		{
			width:250px;
			height: 38px;
		}
		.form1
		{
			margin:0 540px;
		}
		label
		{
			color: black;
		}

	</style>
</head>
<body style="background-color: magenta;">

	<h2 style="text-align: center;color: black;">Edit Your Information</h2>
	<?php
		
		$sql = "SELECT * FROM student WHERE username='$_SESSION[login_user]'";
		$result = mysqli_query($db,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$fullname=$row['fullname'];
			$email=$row['email'];
			$username=$row['username'];
			$password=$row['password'];
			$roll=$row['roll'];
			$contact=$row['contact'];
			
		}

	?>

	<div class="profile_info" style="text-align: center;">
		<span style="color: black; font-size:25px;">WELCOME,</span>	
		<h4 style="color: black; font-size:20px;"><?php echo $_SESSION['login_user']; ?></h4>
	</div><br><br>
	
	<div class="form1">
		<form action="" method="post" enctype="multipart/form-data">

		<input class="form-control" type="file" name="file">

		<label><h4><b>Full Name: </b></h4></label>
		<input class="form-control" type="text" name="fullname" value="<?php echo $fullname; ?>">

		<label><h4><b>Email</b></h4></label>
		<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">

		<label><h4><b>Username</b></h4></label>
		<input class="form-control" type="text" name="username" value="<?php echo $username; ?>">

		<label><h4><b>Password</b></h4></label>
		<input class="form-control" type="text" name="password" value="<?php echo $password; ?>">

		<label><h4><b>Roll No</b></h4></label>
		<input class="form-control" type="text" name="roll" value="<?php echo $roll; ?>">

		<label><h4><b>Contact No</b></h4></label>
		<input class="form-control" type="text" name="contact" value="<?php echo $contact; ?>">

		<br>
		<div style="padding-left: 100px;">
			<button class="btn btn-default" type="submit" name="submit">save</button></div>
	</form>
</div>
	<?php 

		if(isset($_POST['submit']))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);
			
			$fullname=$_POST['fullname'];
			$email=$_POST['email'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$roll=$_POST['roll'];
			$contact=$_POST['contact'];
			$pic=$_FILES['file']['name'];

			$sql1= "UPDATE student SET pic='$pic', fullname='$fullname', email='$email', username='$username', password='$password', roll='$roll',contact='$contact' WHERE username='".$_SESSION['login_user']."';";

			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="profile.php";
					</script>
				<?php
			}
		}
 	?>
</body>
</html>
