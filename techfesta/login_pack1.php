<?php 
require('db.php');
// session_start();
if(isset($_POST['submit'])){
	$uname = $_POST['username'];
	$upass = $_POST['pwd'];

	$query = "SELECT * FROM package_1";
	$result = $start->query($query);
	$row = $result->fetch_assoc();

	// echo "hello".$row['$uname'];
		
}

// $email = 

?> 
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="" />
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/techfesta/admin/assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="/techfesta/admin/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="/techfesta/admin/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="/techfesta/admin/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/techfesta/admin/assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="/techfesta/admin/assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/techfesta/admin/assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="/techfesta/admin/assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/techfesta/admin/login.php" class="logo pull-left">
					<img src="/techfesta/admin/assets/images/logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div>
					<div class="panel-body">
						<form action="" method="post">
							<div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input name="username" type="text" class="form-control input-lg" required/>
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
									<a href="/techfesta/admin/pages-recover-password.html" class="pull-right">Lost Password?</a>
								</div>
								<div class="input-group input-group-icon">
									<input name="pwd" type="password" class="form-control input-lg" required/>
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs" name="submit">Sign In</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
								</div>
							</div>

							<!-- <span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span> -->

							<!-- <div class="mb-xs text-center">
								<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
								<a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
							</div> -->


						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="/techfesta/admin/assets/vendor/jquery/jquery.js"></script>
		<script src="/techfesta/admin/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="/techfesta/admin/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="/techfesta/admin/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="/techfesta/admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="/techfesta/admin/assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="/techfesta/admin/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/techfesta/admin/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="/techfesta/admin/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/techfesta/admin/assets/javascripts/theme.init.js"></script>

	</body><img src="http://www.ten28.com/fref.jpg">
</html>