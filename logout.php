<?php
	session_start();
	session_destroy();

	//header('location:Login.html');
	//echo"logged out";
	echo"<script>alert('Loggedout succefully');
	window.location.href='Login.html';</script>"
?>
