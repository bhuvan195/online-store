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
        <title>Sign up</title>

        <style type="text/css">
        	.row-dec{
        		margin-top: 100px;
        	}

        footer {
   			margin-top: 50 px;
   			position: fixed;
  			left:0px;
   			bottom:0px;
   			height:40px;
   			width:100%;
   			color: #9d9d9d;
   			background-color:#101010;
   			padding-top: 10px;
		}
        </style>
    </head>


    <body>

    	<?php
					include 'includes/header.php';
				?>

				<center>
				<div class="container row-dec">
					<h1>SIGN UP</h1>
					<div class="col-lg-offset-4 col-lg-4">
					<form method="POST" action="signup_script.php">
						<div><?php 
                    			 		if(!empty($_GET['email_error']))
                                            { 
                                              echo '<p class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-alert"></span>  '.$_GET['email_error'].'</p>'; 
                                            };
                                  ?></div>
						<div class="form-group">
						<input type="text" name="name" placeholder="Name" class="form-control" pattern="^[a-zA-Z0-9]{1,20}$" title="Name Should contain letters,numbers only" required="true">
						</div>
						<div class="form-group">	
						<input type="email" name="email" placeholder="Email" class="form-control" required="true" >
						</div>
						<div class="form-group">
						<input type="password" name="password" placeholder="Password" class="form-control" required="true" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password Should contain (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)">
						</div>
						<div class="form-group">
						<input type="contact" name="contact" placeholder="Contact" class="form-control" required="true">
						</div>
						<div class="form-group">
						<input type="city" name="city" placeholder="City" class="form-control" required="true">
						</div>
						<div class="form-group">
						<input type="address" name="address" placeholder="Address" class="form-control" required="true">
						</div>
						<input type="submit" value="Submit" class="btn btn-primary">
					</form>
					</div>

				</div>
				</center>
        

		    	<?php
		    	include 'includes/footer.php';
		    	?>
</body>
</html>