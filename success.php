<?php
	
	require 'includes/common.php';

	if(!isset($_SESSION['email'])){
		header('location:index.php');
	}

	$temp=$_GET['confirm_id'];

	//$temp=trim($temp,',');

	$i=0;

	$count=1;

	$len=strlen($temp)/2;

	while($count<=$len){
		$pos=strpos($temp, ',');
		$item_id =substr($temp, 0,$pos);
		$temp=substr($temp, strpos($temp, ',')+1);
		
		$query="update users_items set status='Confirmed' where item_id=$item_id";

		$res=mysqli_query($con,$query) or die(mysqli_error($con));


		$count=$count+1;
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
        <title>Success</title>

        <style type="text/css">
        	.row-dec{
        		margin-top: 100px;
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

		.padd{
			padding-top: 60px;
		}
			
		th{
			text-align: center;
		}

        </style>
    </head>


    <body>

    	<?php
    		include 'includes/header.php';
    		?>


				<div class="container padd">
					<div class="jumbotron alert-success">
						<center>
						<h3>Your Order is Confirmed.</h3>
						<p>Thank you for Shopping.</p>
						<p><a href="products.php" ">Click here</a> to purchase another item.</p>
						</center>
					</div>
				</div>


		<?php
			include 'includes/footer.php';
			?>
				
</body>
</html>
