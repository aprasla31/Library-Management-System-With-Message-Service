<?php
	session_start();
	if (isset($_SESSION['login_user']))
	{
		unset($_SESSION['login_user']);// code...
	}
	header("location:../index.php");
?>