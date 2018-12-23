<?php

	$con=mysqli_connect("localhost","root","");

	$query="drop database if exists online_voting_system";
	if(mysqli_query($con,$query)) echo "dropped<br/>";
	else echo mysqli_error($con);

	$query="create database online_voting_system";
	if(mysqli_query($con,$query)) echo "created<br/>";
	else echo mysqli_error($con);

	$con=mysqli_connect("localhost","root","","online_voting_system");

$query="CREATE TABLE user_registration (

  First_Name varchar(255) NOT NULL,
  Last_Name varchar(255) NOT NULL,
  Username varchar(255) NOT NULL,
  Age int(20) NOT NULL,
  Email varchar(225) NOT NULL,
  Password varchar(20) NOT NULL,
  Confirm_password varchar(255) NOT NULL,
  PRIMARY KEY (Email)
)";
	if(mysqli_query($con,$query)) echo "user_registration Table Created<br/>";
	else echo mysqli_error($con);
	$query="INSERT INTO `user_registration` VALUES ( 'hassanul', 'banna','akib', '26', 'hassanul.banna@northsouth.edu', '321', '321' )";
	if(mysqli_query($con,$query)) echo "Admin Created<br/>";
	else echo mysqli_error($con);

			$query="CREATE TABLE create_election (
        election_name varchar(255) NOT NULL,
        candidate_name varchar(255) NOT NULL,
        candidate_id int(25) NOT NULL,
        Age int(20) NOT NULL,
        candidate_logo varchar(255) NOT NULL,
  PRIMARY KEY (candidate_id)

) ";
	if(mysqli_query($con,$query)) echo "create_election Table Created<br/>";
	else echo mysqli_error($con);

	$query="CREATE TABLE login_window (
    Username varchar(255) NOT NULL,
    Password varchar(255) NOT NULL
) ";
	if(mysqli_query($con,$query)) echo "login_window Table Created<br/>";
	else echo mysqli_error($con);
?>
