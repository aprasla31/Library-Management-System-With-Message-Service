<?php
	include "connection.php";
	include "navbar.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		.wrapper
		{
			width: 500px;
			margin: 0 auto;
			color: black;
		

		}
	</style>

</head>
<body style="background-color:magenta ;">
	<div class= "container">
		<form action="" method="post">
			<button class="btn btn-default" style="float: right; width:70px;" name= "submit1" type="submit1">EDIT</button>
		</form>
		<div class="wrapper">
			<?php

			if(isset($_POST['submit1']))
			{
				?>
				<script type="text/javascript">
					window.location="edit.php"
				</script>
				<?php
			}

				$q=mysqli_query($db, "SELECT * FROM admin where username='$_SESSION[login_user]';");
			?>
			<h2 style="text-align:center;">MY PROFILE</h2>
			<?php
				$row=mysqli_fetch_assoc($q);

				echo "<div style='text-align: center'>
					<img class='img-circle profile_img' height=110 width=110 src= 'images/".$_SESSION['pic'],"'></div>";
			?>
			<div style="text-align: center;"><b>Welcome</b>
			    <h4>
				  <?php echo $_SESSION['login_user']; ?>
			    </h4>
		    </div>
		    <?php
		    	echo "<b>";
		    	echo "<table class=' table table-bordered'>";
		    		echo "<tr>";
		    			echo"<td>";
		    				echo "<b> Full Name: </b>";
		    			echo"</td>";

		    			echo "<td>";
		    				echo $row['fullname'];
		    			echo "</td>";
		    		echo "</tr>";

		    		echo "<tr>";
		    			echo"<td>";
		    				echo "<b> Email: </b>";
		    			echo"</td>";

		    			echo "<td>";
		    				echo $row['email'];
		    			echo "</td>";

		    		echo "</tr>";

		    		echo "<tr>";
		    			echo"<td>";
		    				echo "<b> Username: </b>";
		    			echo"</td>";

		    			echo "<td>";
		    				echo $row['username'];
		    			echo "</td>";

		    		echo "</tr>";

		    		echo "<tr>";
		    			echo"<td>";
		    			echo "<b> Password: </b>";
		    			echo"</td>";
		    			echo "<td>";
		    				echo $row['password'];
		    			echo "</td>";
		    		echo "</tr>";

		    		

		    		echo "<tr>";
		    			echo"<td>";
		    			echo "<b> ContactNo: </b>";
		    			echo"</td>";
		    			echo "<td>";
		    				echo $row['contact'];
		    			echo "</td>";
		    		echo "</tr>";
		    	

		    	echo "</table>";
		    	echo "</b>";
		    ?>
		</div>
	</div>

</body>
</html>