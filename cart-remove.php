<?php
	require 'includes/common.php';

	$remove_id=$_GET['id'];
	$user_id=$_SESSION['id'];

	echo $remove_id;

	echo $user_id;

	$query="delete from users_items where user_id=$user_id AND item_id=$remove_id";


	$res=mysqli_query($con,$query) or die(mysqli_error($con));

	header('location:cart.php');

?>