<?php 
	session_start();
	unset($_SESSION['user']);
	unset($_SESSION['pwd']);
	header("location:login.php")
?>