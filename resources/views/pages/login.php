<?php
session_start();
  $Username=$_POST['Username'];
  $Password=$_POST['Password'];
  $con=mysqli_connect("localhost","root","","online_voting_system");
  $query="select * from customer_details where email='$email'";
  $result=mysqli_query($con,$query);
  $num=mysqli_num_rows($result);
  if($num==0){
    echo "No user with this Username found,Try to <a href='Login.html'>Login</a> again";
  }
  else{
    $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
    $dbpassword=$row['Password'];
    $admin="hassanul.banna@nothsouth.edu";
      if($email==$admin){
        if($Password==$dbpassword){
      $_SESSION['Email']=$Email;
      $_SESSION['login']=TRUE;
      header('location:admin.php');
        }
      else{
      echo "Password doesn't match, Try to <a href='Login.html'>Login</a> again";
    }
  }else if($Password==$dbpassword){
      $_SESSION['Email']=$Email;
      $_SESSION['login']=TRUE;
      header('location:user.php');
    }
    else{
      echo "Password doesn't match, Try to <a href='Login.html'>Login</a> again";
    }

  }
?>
