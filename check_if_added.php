<?php
	function check_if_added_to_cart($item_id){

		$id=$_SESSION['id'];
		$con=mysqli_connect("localhost","root","pavan9876","store") or die(mysqli_error($con));

		$query="select *from users_items where item_id=$item_id AND user_id=$id AND status='Added to cart'";

		$res=mysqli_query($con,$query) or die(mysqli_error($con));

		$row=mysqli_fetch_array($res);

		if(mysqli_affected_rows($con)>=1) {
		
		 return 1;

			}

		else
		{
			return 0;
		}
		

	}

?>