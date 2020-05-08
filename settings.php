<?php
	require 'includes/common.php';

	if(!isset($_SESSION['email'])){
		header('location:index.php');
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
        <title>Settings</title>

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
					<div class="row"> 
						<div class="col-xs-offset-4 col-xs-4">
							<h3>Change Password</h3>
							<form action="settings_script.php" method="POST">
								<div class="form-group">
								<input type="Password" name="oldpassword" placeholder="Old Password" class="form-control"
								required="true" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password Should contain (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)">
								<div><?php 
                    			 		if(!empty($_GET['pwd_error']))
                                            { 
                                              echo '<p class="alert alert-danger " role="alert"><span class="glyphicon glyphicon-alert"></span>  '.$_GET['pwd_error'].'</p>'; 
                                            }
                                            ?>
                    			 </div>
								</div>
								<div class="form-group">
								<input type="Password" name="newpassword" placeholder="New Password" class="form-control" required="true" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password Should contain (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)">
								</div>
								<div class="form-group">
								<input type="Password" name="re-typenewpassword" placeholder="Re-type New Password" class="form-control" required="true" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password Should contain (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)">
								<div><?php 
                    			 		if(!empty($_GET['retype_pwd_error']))
                                            { 
                                              echo '<p class="alert alert-danger " role="alert"><span class="glyphicon glyphicon-alert"></span>  '.$_GET['retype_pwd_error'].'</p>'; 
                                            }
                                            ?>
                    			 </div>
								</div>
								<input type="submit" value="Change" class=" btn btn-primary">
							</form>
						</div>
					</div>
				</div>


				<center>
					<div class="row">
					<div class="col-xs-offset-4 col-xs-4">
					<div class='status'><?php 
                    			 		if(!empty($_GET['pwd_success']))
                                            { 
                                              echo '<p class="alert alert-success " role="alert"><span class="glyphicon glyphicon-alert"></span>  '.$_GET['pwd_success'].'</p>'; 
                                            }
                                            ?>
                 	 </div>
                 	 </div>
                 	</div>
                 </center>




		<?php
			include 'includes/footer.php';
		  ?>

				
</body>
</html>