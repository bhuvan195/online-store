<?php
	require "includes/common.php";
	if(isset($_SESSION['email'])) {
		header('location:products.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Index page</title>

	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
    	.right{
    		float: right;
    		margin: auto;
    		padding-right: 20px;
    	}
    	.dec{
    		padding-left: 100px;
    	}

    	#banner-image{
			padding-bottom: 50px;
			margin-bottom: 20px;
			text-align: center;
			color: #f8f8f8;
			background: url(intro-bg_1.jpg) no-repeat center;
			background-size: cover;
		}

		#banner-content{
			position: relative; 
			padding-top: 6%; 
			padding-bottom: 6%; 
			margin-top: 12%; 
			margin-bottom: 12%; 
			background-color: rgba(0, 0, 0, 0.7); 
			max-width: 660px;
		}

		footer {
  		 
  		 left:0px;
  		 bottom:0px;
  		 height:40px;
  		 width:100%;
  		 background-color:#101010;
  		 color: #9d9d9d; 
  		 padding-top: 10px;

		}

    </style>

</head>
<body>

				<?php
					include 'includes/header.php';
				?>
				

				<div id="banner-image">
					<div class="container">
						<center>
						<div id="banner-content">
							<center>
								<h1>We sell lifestyle.</h1>
								<p>Flat 40% OFF on premium brands</p>
							<a href="products.php" class="btn btn-danger btn-lg-active">Shop now</a>
							</center>
						</div>
						</center>
					</div>
				</div>

				<div class="container">

					<div class="row">
						
						<div class="col-sm-4 thumbnail">
							<img src="camera.jpg">
							<div class="caption">
							<center>
							<h2>Cameras</h2>
							<p>Choose amoung the best available in the world.</p>
							</center>
							</div>
						</div>

						<div class="col-sm-4 thumbnail">
							<img src="watch.jpg">
							<div class="caption">
							<center>
							<h2>Watches</h2>
							<p>Original watches from the best brands..</p>
							</center>
							</div>
						</div>

						<div class="col-sm-4 thumbnail">
							<img src="shirt.jpg">
							<div class="caption">
							<center>
							<h2>Shirts</h2>
							<p>Our exquisite collection of shirts</p>
							</center>
							</div>
						</div>

					</div>
				</div>


			<?php
				include 'includes/footer.php';
			?>

</body>
</html>