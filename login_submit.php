<?php
	require 'includes/common.php';

	$email_data=mysqli_real_escape_string($con,$_POST['email']);
	$password_data=mysqli_real_escape_string($con,$_POST['password']);
	$password_data=md5($password_data);

	$query="select id,password from users where email='$email_data'";

	$res=mysqli_query($con,$query) or die(mysqli_error($con));


	$row=mysqli_fetch_array($res);

	if(!mysqli_affected_rows($con)) {
		header('location: login.php?email_error=User not found !');
		exit();
	}


	$db_password=$row['password'];

	if($password_data==$db_password){
		$_SESSION['email']=$email_data;
		$_SESSION['id']=$row['id'];
		header('location:products.php');
	}

	else
	{
		header('location: login.php?password_error=Enter Correct Password');

	}





	


?>
