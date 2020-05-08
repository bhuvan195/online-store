<?php
	require 'includes/common.php';
	
	if(!isset($_SESSION['email']))
	{
		header('location:login.php?message=Login to continue');
	}

	

?>


<!DOCTYPE html>
<html>
    
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart</title>

        <style type="text/css">
        	.row-dec{
        		margin-top: 50px;
        	}

        	.status{
        		margin-top: 50px;
        	}
        footer {
   			position:fixed;
  			left:0px;
   			bottom:0px;
   			height:40px;
   			width:100%;
   			color: #9d9d9d;
   			background-color:#101010;
   			padding-top: 10px;
		}

		table{
			margin-top:	12%;
		}
			
		th{
			text-align: center;
		}

		.padd
		{
			padding-top: 30px;
		}

        </style>
    </head>


    <body>

    	<?php
    		include 'includes/header.php';
    		?>


    		<center class="status">
                    <div>
                        <?php 

                        	$user_id=$_SESSION['id'];

						    $query="select * from users_items where user_id='$user_id' AND status='Added to cart'"; 

						    $res=mysqli_query($con,$query) or die(mysql_error($con));

                            if(!mysqli_affected_rows($con))
                                            { 
                                              echo '<p class="alert alert-danger " role="alert"><span class="glyphicon glyphicon-alert"> </span>&nbsp;&nbsp;&nbsp;Add items to cart first !!!</p>'; 
                                            }
                            ?>
                    </div>
                </center>


				<div class="container-fluid padd">
				<div class="table-responsive-md">
				<div class="row">
				<div class=" col-xs-offset-3 col-xs-6">
				<table class="table table-bordered  table-striped table-hover">
					<tbody >
						
						<tr>
							
							<th>Item Number</th>
							<th>Item Name</th>
							<th>Price</th>
							<th></th>
								
						</tr>

						<?php
							
							$id='';

							$user_id=$_SESSION['id'];

						    $query="select * from users_items where user_id='$user_id' AND status='Added to cart'"; 

						    $res=mysqli_query($con,$query) or die(mysql_error($con));

						    if(!mysqli_affected_rows($con)){
						    }

						    else
						    {
						    	$sum=0;
						    	$count=1;					
						    	$name=array();
						    	$price=array();
						    	//$id='';

						   	    	while($row=mysqli_fetch_array($res)){
						   	    	$temp=$row['item_id'];
						    		$query="select * from items where id='$temp'";

						    		$item_res=mysqli_query($con,$query) or die(mysql_error($con));

						    		$item_row=mysqli_fetch_array($item_res);

						    		$sum=$sum+$item_row['price'];

						    		$id=$id.$item_row['id'].',';

						    		$temp=$item_row['id'];

						    		

						    	?>

						   	<tr>
							
							<td align="center"><?php echo $count;?></td>
							<td align="center"><?php echo $item_row['name'];?></td>
							<td align="right"><?php echo $item_row['price'];?></td>
							<td><a href='cart-remove.php?id=<?php echo $temp?>' class='remove_item_link btn btn-block btn-warning'> Remove</a></td>
								
							</tr>
							<?php $count=$count+1;}
						}?>



						<tr>
							
							<td></td>
							<td>Total</td>
							<td valign="middle" align="right">Rs <?php if(!empty($sum)){
								echo $sum;}
								?>
							</td>
							
							<td align="center"><a href="success.php?confirm_id=<?php echo $id?>" class="btn btn-primary btn-block" <?php if(empty($id)){echo 'disabled ';}?>><b>Confirm Order</b></a></td>

								
						</tr>
						
					</tbody>

				</table>
				</div>
				</div>
				</div>
				</div>

		<?php
			include 'includes/footer.php';
			?>
				
</body>
</html>