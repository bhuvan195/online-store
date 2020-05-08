<?php
	require 'includes/common.php';
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
        <title>Product</title>

        <style type="text/css">
        	.row-dec{
        		margin-top: 100px;
        	}

        footer {
   			
  			left:0px;
   			bottom:0px;
   			height:40px;
   			width:100%;
   			color: #9d9d9d;
   			background-color:#101010;
   			padding-top: 10px;
		}

		.dec{
			margin-top: 75px;
		}

		.jumbotron{
			background-color: #CCCCCC;
		}

		.p-dec{
			color: #858C93;
		}
        </style>
    </head>


    <body>

    	<?php
    		include 'includes/header.php';
    		include  'includes/check_if_added.php';
    	?>
				
				<div class="container dec">
				<div class="jumbotron ">
					<h1>Welcome to our Lifestyle Store!</h1>
					<p class="p-dec">We have the best cameras,watches and shirts for you.No need to hunt around.We all have in one place.</p>
						
					</div>
				</div>

				
				<div class="container">

					<div class="row">
						
						<div class="col-md-3 col-sm-6 thumbnail">
							<img src="camera.jpg">
							<div class="caption">
							<center>
							<h2>Cameras</h2>
							<p>Price : Rs.36000.00</p>
							</center>
							<?php
								if(!isset($_SESSION['email'])){?>
									<p ><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								}
								else{
									if(check_if_added_to_cart(1)){
										echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
									}
									else{
										?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php
									}
								}
								?>
						</div>
					</div>

						<div class="col-md-3 col-sm-6 thumbnail">
							<img src="camera.jpg">
							<div class="caption">
							<center>
							<h2>Cameras</h2>
							<p>Price : Rs.36000.00</p>
							</center>
							<?php
								if(!isset($_SESSION['email'])){?>
									<p ><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								}
								else{
									if(check_if_added_to_cart(2)){
										echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
									}
									else{
										?>
										<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php
									}
								}
								?>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 thumbnail">
							<img src="camera.jpg">
							<div class="caption">
							<center>
							<h2>Cameras</h2>
							<p>Price : Rs.36000.00</p>
							</center>
							<?php
								if(!isset($_SESSION['email'])){?>
									<p ><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								}
								else{
									if(check_if_added_to_cart(3)){
										echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
									}
									else{
										?>
										<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php
									}
								}
								?>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 thumbnail">
							<img src="camera.jpg">
							<div class="caption">
							<center>
							<h2>Cameras</h2>
							<p>Price : Rs.36000.00</p>
							</center>
							<?php
								if(!isset($_SESSION['email'])){?>
									<p ><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								}
								else{
									if(check_if_added_to_cart(4)){
										echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
									}
									else{
										?>
										<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php
									}
								}
								?>
							</div>
						</div>
					</div>
				</div>

				<div class="container">

					<div class="row">
						
						<div class="col-md-3 col-sm-6 thumbnail">
							<img src="watch.jpg">
							<div class="caption">
							<center>
							<h2>Watches</h2>
							<p>Price : Rs.15000.00</p>
							</center>
							<?php
								if(!isset($_SESSION['email'])){?>
									<p ><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								}
								else{
									if(check_if_added_to_cart(5)){
										echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
									}
									else{
										?>
										<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php
									}
								}
								?>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 thumbnail">
							<img src="watch.jpg">
							<div class="caption">
							<center>
							<h2>Watches</h2>
							<p>Price : Rs.15000.00</p>
							</center>
							<?php
								if(!isset($_SESSION['email'])){?>
									<p ><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								}
								else{
									if(check_if_added_to_cart(6)){
										echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
									}
									else{
										?>
										<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php
									}
								}
								?>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 thumbnail">
							<img src="watch.jpg">
							<div class="caption">
							<center>
							<h2>Watches</h2>
							<p>Price : Rs.15000.00</p>
							<?php
								if(!isset($_SESSION['email'])){?>
									<p ><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								}
								else{
									if(check_if_added_to_cart(7)){
										echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
									}
									else{
										?>
										<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php
									}
								}
								?>
							</center>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 thumbnail">
							<img src="watch.jpg">
							<div class="caption">
							<center>
							<h2>Watches</h2>
							<p>Price : Rs.15000.00</p>
							<?php
								if(!isset($_SESSION['email'])){?>
									<p ><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								}
								else{
									if(check_if_added_to_cart(8)){
										echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
									}
									else{
										?>
										<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php
									}
								}
								?>
							</center>
							</div>
						</div>
					</div>
				</div>


				<div class="container">

					<div class="row">
						
						<div class="col-md-3 col-sm-6 thumbnail">
							<img src="shirt.jpg">
							<div class="caption">
							<center>
							<h2>Shirts</h2>
							<p>Price : Rs.3000.00</p>
							<?php
								if(!isset($_SESSION['email'])){?>
									<p ><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								}
								else{
									if(check_if_added_to_cart(9)){
										echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
									}
									else{
										?>
										<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php
									}
								}
								?>
							</center>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 thumbnail">
							<img src="shirt.jpg">
							<div class="caption">
							<center>
							<h2>Shirts</h2>
							<p>Price : Rs.3000.00</p>
							<?php
								if(!isset($_SESSION['email'])){?>
									<p ><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								}
								else{
									if(check_if_added_to_cart(10)){
										echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
									}
									else{
										?>
										<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php
									}
								}
								?>
							</center>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 thumbnail">
							<img src="shirt.jpg">
							<div class="caption">
							<center>
							<h2>Shirts</h2>
							<p>Price : Rs.3000.00</p>
							<?php
								if(!isset($_SESSION['email'])){?>
									<p ><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								}
								else{
									if(check_if_added_to_cart(11)){
										echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
									}
									else{
										?>
										<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php
									}
								}
								?>
							</center>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6 thumbnail">
							<img src="shirt.jpg">
							<div class="caption">
							<center>
							<h2>Shirts</h2>
							<p>Price : Rs.3000.00</p>
							<?php
								if(!isset($_SESSION['email'])){?>
									<p ><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								}
								else{
									if(check_if_added_to_cart(12)){
										echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
									}
									else{
										?>
										<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php
									}
								}
								?>
							</center>
							</div>
						</div>
					</div>
				</div>

				
        

    <footer>
					<div class="container footer">
						<center>
							<p>Copyright © Lifestyle Store.All Rights Reserved | Contact Us: +91 90000 00000</p>
						</center>
					</div>
	</footer>
</body>
</html>