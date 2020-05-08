<?php
	require 'includes/common.php';

	if(!isset($_SESSION['email'])){
		header('location:index.php');
	}

	$email=$_SESSION['email'];
	$old_pwd=mysqli_real_escape_string($con,$_POST['oldpassword']);
	$new_pwd=mysqli_real_escape_string($con,$_POST['newpassword']);
	$retype_new_pwd=mysqli_real_escape_string($con,$_POST['re-typenewpassword']);


	if(strcmp($new_pwd,$retype_new_pwd)){
		header('location:settings.php?retype_pwd_error=New password and Re-type new password not matched');
		exit();
	}
	else{

		$query="select password from users where email='$email'";

		$res=mysqli_query($con,$query) or die(mysqli_error()($con));

		$row=mysqli_fetch_array($res);

		$temp=md5($new_pwd);

		if(md5($old_pwd)==$row['password']){
			$query="update users set password='$temp' where email='$email'";

		$res=mysqli_query($con,$query) or die(mysqli_error()($con));

		if(mysqli_affected_rows($con)){
			header('location:settings.php?pwd_success=Password Updated Successfully !!!');
		}
		
		}

		else{

		header('location:settings.php?pwd_error=Incorrect Password');
			exit();
		
		}


	}

?>