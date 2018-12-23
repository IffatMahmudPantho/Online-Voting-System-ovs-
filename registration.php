<?php

	$First_Name=$_POST['First_Name'];
	$Last_Name=$_POST['Last_Name'];
	$Username=$_POST['Username'];
	$Age=$_POST['Age'];

	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	$Confirm_password=$_POST['Confirm_password'];

	if($password==$Confirm_password){
		$con=mysqli_connect("localhost","root","","online_voting_system");
		$query="select Email from user_registration where email='	$Email'";
		$result=mysqli_query($con,$query);
		$num=mysqli_num_rows($result);
		if($num==0){
			$query="insert into user_registration(First_Name,Last_Name,Username,Age,Email,Password,Confirm_password)
			values('$First_Name','$Last_Name','$Username','$Age','$Email','$Password','$Confirm_password')";
			$result=mysqli_query($con,$query);
			if($result){
				echo "user_registration created successfully,Go to <a href='Login.html'>Login</a>";
			}
		}
		else{
			echo "This email is using by another user, Go back to <a href='Registration.html'>Registration</a> and give any other email";
		}
	}
	else{
		echo "Password doesn't match,Go back to <a href='Registration.html'>Registration</a>";
	}
?>
