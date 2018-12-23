<?php

	$election_name=$_POST['election_name'];
	$candidate_name=$_POST['candidate_name'];
	$candidate_id=$_POST['candidate_id'];
	$Age=$_POST['Age'];

	$candidate_logo=$_POST['candidate_logo'];


	if($candidate_id==$Confirm_password){
		$con=mysqli_connect("localhost","root","","online_voting_system");
		$query="select candidate_id from create_election where candidate_id='	$candidate_id'";
		$result=mysqli_query($con,$query);
		$num=mysqli_num_rows($result);
		if($num==0){
			$query="insert into create_election(election_name,candidate_name,candidate_id,Age,candidate_logo)
			values('$election_name','$candidate_name','$candidate_id','$Age','$candidate_logo')";
			$result=mysqli_query($con,$query);
			if($result){
				echo "create_election created successfully,Go to <a href='Login.html'>Login</a>";
			}
		}
		else{
			echo "This candidate_id is using by another user, Go back to <a href='create_election.html'>Registration</a> and give any other email";
		}
	}
	
?>
