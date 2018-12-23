<?php
session_start();
	$con=mysqli_connect("localhost","root","","online_voting_system");
	if($_SESSION['login']==TRUE){



	$Email=$_GET["Email"];
	$query="delete from user_registration where Email='$Email'";
	mysqli_query($con,$query);
	header('location:login.php');
	}
	else
	{
		header('location:Login.html');
	}
?>
