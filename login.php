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
        <title>Login</title>

        <style type="text/css">
        	.row-dec{
        		margin-top: 50px;
        	}

            .status{
                margin-top: 50px;
            }

        footer {
   			margin-top: 50px;
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

    	<nav class="navbar navbar-inverse navbar-fixed-top">
					<div class="container">
						<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>		
						<a href="index.php" class="navbar-brand">Lifestyle Store</a>
						 </div>
						 <div class="collapse navbar-collapse" id=mynavbar>
						 <ul class="nav navbar-nav navbar-right" >
						 	<li><a href="login.php"  ><span class="glyphicon glyphicon-log-in"> </span> Login</a></li>
						 	<li><a href="signup.php" ><span class="glyphicon glyphicon-user "> </span> Sign up</a></li>
						 </ul>
						 </div>
						
					</div>
				</nav>


                <center class="status">
                    <div>
                        <?php 
                            if(!empty($_GET['message']))
                                            { 
                                              echo '<p class="alert alert-danger " role="alert"><span class="glyphicon glyphicon-alert"></span>  '.$_GET['message'].'</p>'; 
                                            }
                            ?>
                    </div>
                </center>

        <div class="container">
            <div class="row row-dec">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                    	<div class="panel-heading">
                    		Login
                    	</div>
                    	<div class="panel-body">
                    		<p class="text-warning">Login to make a purchase</p>
                    		<form method="POST" action="login_submit.php">
                    			<div class="form-group">
                    			<label for="email">Email</label> 
                    			<input type="email" id="email" name="email" class="form-control" required="true"><br>
                    			<div><?php 
                    			 		if(!empty($_GET['email_error']))
                                            { 
                                              echo '<p class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-alert"></span>  '.$_GET['email_error'].'</p>'; 
                                            };
                                            ?></div>

                    		</div>
                    		
                    		<div class="form-group">
                    			<label for="password">Password</label>
                    			 <input type="password" id="password" name="password" class="form-control" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password Should contain (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)" required="true"><br>
                    			 <div><?php 
                    			 		if(!empty($_GET['password_error']))
                                            { 
                                              echo '<p class="alert alert-danger " role="alert"><span class="glyphicon glyphicon-alert"></span>  '.$_GET['password_error'].'</p>'; 
                                            }
                                            ?></div>
                    			 </div>

                    		<input type="submit" value="Submit" class="btn btn-primary">

                    		</form>
                    	</div>
                    	<div class="panel-footer">
                    		<a href="signup.htm">Don't have a account ? Register</a>
                    	</div>

                    </div>
                </div>
            </div>
        </div>
   

    <?php
    	include 'includes/footer.php';
    	?>
</body>
</html>