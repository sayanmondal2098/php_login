<?php
require('db.php');
// session_start();

if(isset($_POST['submit'])){
	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Pass = $_POST['pwd'];
	$Confirm = $_POST['pwd_confirm'];
	if($Pass == $Confirm){
		$Password = $_POST['pwd'];
		$Query = "INSERT INTO package_1 (Name, Email, Password) VALUES ('$Name', '$Email', '$Password')";

		$insert = $start->query($Query);

		if($insert){
			echo "<br><br>Thank you. ";
			header("Location: /techfesta/index.php");
		} else {
			echo "error.";
		}
	} else {
		echo "Pass not match.";
	}

}
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
				<a href="/techfesta/admin/" class="logo pull-left">
					<img src="/techfesta/admin/assets/images/logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign Up</h2>
					</div>
					<div class="panel-body">
						<form action="" method = "post">
							<div class="form-group mb-lg">
								<label>Name</label>
								<input name="name" type="text" class="form-control input-lg" required/>
							</div>

							<div class="form-group mb-lg">
								<label>E-mail Address</label>
								<input name="email" type="email" class="form-control input-lg" required/>
							</div> 

							<div class="form-group mb-none">
								<div class="row">
									<div class="col-sm-6 mb-lg">
										<label>Password</label>
										<input name="pwd" type="password" class="form-control input-lg" required/>
									</div>
									<div class="col-sm-6 mb-lg">
										<label>Password Confirmation</label>
										<input name="pwd_confirm" type="password" class="form-control input-lg" required/>
									</div>  
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="AgreeTerms" name="agreeterms" type="checkbox" required/>
										<label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>
									</div>
								</div>
								
								<div class="col-sm-4 text-right"> 
									<button type="submit" class="btn btn-primary hidden-xs" name="submit">Sign Up</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign Up</button> 
								</div> 
							</div>

							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-xs text-center">
								<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
								<a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
							</div>

							<p class="text-center">Already have an account? <a href="/techfesta/login_pack1.php">Sign In!</a>

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

	</body>
</html>