<!DOCTYPE html>
<html lang="en">
	<head>
		<!--favicon-->
        <link rel="shortcut icon" href="image/favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
        
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>Login</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="../../Homepage/css/style.css">
        <link rel="stylesheet" href="css/creative.css" type="text/css">
	</head>
	<body class="light-gray-bg-no-scroll">
		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background:black">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="http://www.hgce.org">E-Placement</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="../../Homepage/home.php">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="../../AboutUs/about.php">About Us</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="../../ContactUs/contact.php">Contact Us</a>
                        </li>
                    </ul>
            </div>
            </div>
        </nav>
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <h1>Login</h1>
	        </header>
	        <form class="templatemo-login-form" method="POST" action="">
				<div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Role</label>
                  <select class="form-control" name="role">
                    <option value="select">Role</option>
                    <option value="BScience">Student</option>
                    <option value="ISE">HOD</option>
                    <option value="CSE">Placement</option>
                    <option value="EEE">Principal</option>
                  </select>
                </div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" class="form-control" placeholder="Username" name="username" >           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" class="form-control" placeholder="******" name="password">           
		          	</div>	
	        	</div>	          	
	          	<div class="form-group">
				    <div class="checkbox squaredTwo">
				        <input type="checkbox" id="c1" name="cc" />
						<label for="c1"><span></span>Remember me</label>
				    </div>				    
				</div>
				<div class="form-group">
					<button type="submit" class="templatemo-blue-button width-100">Login</button>
				</div>
	        </form>
		</div>
        <div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Can't Access Account? <strong><a href="Forgot Password.php" class="blue-text">Reset Password</a></strong></p>
		</div>
	</body>
</html>
