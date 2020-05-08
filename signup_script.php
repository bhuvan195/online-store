<?php
	require 'includes/common.php';

	$email_data=mysqli_real_escape_string($con,$_POST['email']);
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$contact=mysqli_real_escape_string($con,$_POST['contact']);
	$city=mysqli_real_escape_string($con,$_POST['city']);
	$address=mysqli_real_escape_string($con,$_POST['address']);
	$password_data=mysqli_real_escape_string($con,$_POST['password']);
	$password_data=md5($password_data);

	$query="select id,password from users where email='$email_data'";

	$res=mysqli_query($con,$query) or die(mysqli_error($con));


	//$row=mysqli_fetch_array($res);

	if(mysqli_affected_rows($con)) {
		header('location: signup.php?email_error=User already exists !');
		exit();
	}

	$query="insert into users(name,email,password,city,contact,address) values('$name','$email_data','$password_data','$city','$contact','$address')";

	$res=mysqli_query($con,$query) or die(mysqli_error($con));

	$id=mysqli_insert_id($con);

	$_SESSION['email']=$email_data;
	$_SESSION['id']=$id;
	header('location:products.php');

?>