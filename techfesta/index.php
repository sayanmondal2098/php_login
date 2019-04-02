
<!DOCTYPE html>
<html lang="en">
<head>
<!--
Fitness Website
-->
<title>Everyday Atlas | Fitness as Part of your Life, Not your Whole Life</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lora:700italic' rel='stylesheet' type='text/css'>

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- =========================
     PRE LOADER       
============================== -->
<div  class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- =========================
    NAVIGATION SECTION   
============================== -->
<div class="navbar navbar-default navbar-fixed-top sticky-navigation" role="navigation">
	<div class="container">

		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">Fitness</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right main-navigation">
				<?php require('db.php');
					$sql = "SELECT * FROM menus";
					$view = $start->query($sql);
					if($view->num_rows > 0){
						while($row = $view->fetch_assoc()){
							echo "<li><a href='";
							echo $row['page'];
						
							echo "' class='smoothScroll'>";
							echo $row['title'];
							echo "</a></li>";
						}
					}
				?>
			</ul>
		</div>

	</div>
</div>


<!-- =========================
    HOME SECTION   
============================== -->
<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-1 col-md-10 col-sm-12 back-slider">
				<h3 class="wow bounceIn" data-wow-delay="0.9s">Hello! you are welcome to</h3>
				<h1 class="wow fadeInUp" data-wow-delay="1.6s">Everyday<br>Atlas</h1>
				<a href="#overview" class="wow fadeInUp smoothScroll btn btn-default" data-wow-delay="2s">LEARN MORE</a>
				<br>
				<br>
			</div>

		</div>
	</div>
</section>


<!-- =========================
    OVERVIEW SECTION   
============================== -->
<section id="overview" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-sm-12">
				<img src="images/overview-img.jpg" class="img-responsive" alt="Overview">
				<blockquote class="wow fadeInUp" data-wow-delay="1.9s">Fitness as Part of your Life, Not your Whole Life!</blockquote>
			</div>

			<div class="col-md-1"></div>

			<div class="wow fadeInUp col-md-4 col-sm-12" data-wow-delay="1s">
				<div class="overview-detail">
					<h2>About Fitness</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat.</p>
					
					<p>Here is the link to the <a href="blog-single.php">blog page</a>.</p>
					
					<p>Here is the link to the <a href="http://myeverydayatlas.com/techfesta/philosophy.html">philosophy page</a>.</p>
					
					<a href="#trainer" class="btn btn-default smoothScroll">Let us begin</a>
				</div>
			</div>

			<div class="col-md-1"></div>

		</div>
	</div>
</section>



<!-- =========================
    PROGRAMS SECTION   
============================== -->
<section id="price" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.9s">
				<h2>Our Programs</h2>
				<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo.</p>
			</div>

			<div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="1s">
				<div class="pricing__item price1">
                    <h3 class="pricing__title">Couch to Gym</h3>
                    <div class="pricing__price"><span class="pricing__currency">$</span>350</div>
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">One General Trainer</li>
                        <li class="pricing__feature">Gym Services</li>
                        <li class="pricing__feature">5 Yoga Courses</li>
                        <li class="pricing__feature">10 Thai Massages</li>
                        <li class="pricing__feature">15 Aerobics</li>
                    </ul>
                    <a href="pack1"><button class="pricing__action">Sign Up Now</button></a>
                </div>
			</div>

			<div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="1.3s">
				<div class="pricing__item price2">
                    <h3 class="pricing__title" style="font-size: 3rem">I Don’t Have S#@t</h3>
                    <div class="pricing__price"><span class="pricing__currency">$</span>550</div>                  
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">Two General Trainers</li>
                        <li class="pricing__feature">Gym Services</li>
                        <li class="pricing__feature">10 Yoga Courses</li>
                        <li class="pricing__feature">20 Thai Massages</li>
                        <li class="pricing__feature">25 Aerobics</li>
                    </ul>
                    <a href="pack2"><button class="pricing__action">Sign Up Now</button></a>
                </div>
			</div>

			<div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="1.6s">
				<div class="pricing__item price3">
                    <h3 class="pricing__title">All 3 Programs</h3>
                    <div class="pricing__price"><span class="pricing__currency">$</span>750</div> 
                    <ul class="pricing__feature-list">
                        <li class="pricing__feature">Three Personal Trainers</li>
                        <li class="pricing__feature">Gym Services</li>
                        <li class="pricing__feature">15 Yoga Courses</li>
                        <li class="pricing__feature">20 Thai Massages</li>
                        <li class="pricing__feature">35 Aerobics</li>
                    </ul>
					<a href="pack3"><button class="pricing__action">Sign Up Now</button></a>
                </div>
			</div>

		</div>
	</div>
</section>



<!-- =========================
    NEWSLETTER SECTION   
============================== -->
<section id="newsletter" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10" data-wow-delay="0.9s">
				<h2>Signup Newsletter</h2>
				<p>Get discounts for your personal fitness and gym services now.</p>
				<div class="newsletter_detail" style="background:none;">
					<form action="/techfesta/subscribe" method="post" id="newsletter-signup">
						<div class="col-md-6 col-sm-6">
							<input name="name" type="text" class="form-control" id="name" placeholder="Name" required>
					  	</div>
						<div class="col-md-6 col-sm-6">
							<input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
					  	</div>
						<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
							<input name="submit" type="submit" class="form-control" id="submit" value="SEND MESSAGE">
						</div>
				  	</form>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- =========================
    BLOG SECTION   
============================== -->
<section id="blog" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12 text-center">
				<h2>Fitness Blog</h2>
				<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo.</p>
			</div>

			<div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.9s">
				<div class="blog-thumb">
					<span class="blog-date">Body Fitness / July 2, 2016</span>
					<h3 class="blog-title"><a href="blog-single">How to get a fitness model body?</a></h3>
					<h5 id="blog-author">by David Walker</h5>
				</div>
			</div>

			<div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.3s">
				<div class="blog-thumb">
					<span class="blog-date">Healthy Fit / June 8, 2016</span>
					<h3 class="blog-title"><a href="blog-single">Personal Fitness Tips</a></h3>
					<h5 id="blog-author">by George</h5>
				</div>
			</div>

			<div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.6s">
				<div class="blog-thumb">
					<span class="blog-date">Gym Services / May 9, 2016</span>
					<h3 class="blog-title"><a href="blog-single">Efficient Workout Plans</a></h3>
					<h5 id="blog-author">by Mary Louis</h5>
				</div>
			</div>

			<div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.9s">
				<div class="blog-thumb">
					<span class="blog-date">Practice Aerobics / April 18, 2016</span>
					<h3 class="blog-title"><a href="blog-single">How to practice Aerobics?</a></h3>
					<h5 id="blog-author">by Michael Fit</h5>
				</div>
			</div>
			
		</div>
	</div>
</section>

<!-- =========================
    CHARITIES SECTION   
============================== -->
<section id="trainer" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="1.3s">
				<h2>our Charities</h2>
				<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo.</p>
			</div>

			<div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="1.9s">
				<div class="trainer-thumb">
						<!--<img src="images/trainer-img1.jpg" class="img-responsive" alt="Trainer">-->
    				<a href="https://www.stjude.org/" target="_blank"> <img src="images/trainer-img1.jpg" class="img-responsive" alt="Trainer"></a>
					<!-- 	<div class="trainer-overlay">
							<div class="trainer-des">
								<h2>Couch to Gym</h2>
								<h3>Free Forever</h3>
								<ul class="social-icon">
									<li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a></li>
									<li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a></li>
									<li><a href="#" class="fa fa-behance wow fadeInUp" data-wow-delay="1.9s"></a></li>
								</ul>
							</div>
						</div>-->
				</div>
				<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate.</p>
			</div>

			<div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="2s">
				<div class="trainer-thumb">
					<!--	<img src="images/trainer-img2.jpg" class="img-responsive" alt="Trainer">-->
					<a href="https://www.redcross.org/" target="_blank"> <img src="images/trainer-img2.jpg" class="img-responsive" alt="Trainer"></a>

					<!--	<div class="trainer-overlay">
							<div class="trainer-des">
								<h2>Marry</h2>
								<h3>Fitness Trainer</h3>
								<ul class="social-icon">
									<li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a></li>
									<li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a></li>
									<li><a href="#" class="fa fa-behance wow fadeInUp" data-wow-delay="1.9s"></a></li>
								</ul>
							</div>
						</div>-->
				</div>
				<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate.</p>
			</div>

			<div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="2.3s">
				<div class="trainer-thumb">
				    <!--<img src="images/trainer-img3.jpg" class="img-responsive" alt="Trainer">-->
					<a href="https://www.arflife.org/" target="_blank"><img src="images/trainer-img3.jpg" class="img-responsive" alt="Trainer"></a>
					<!--	<div class="trainer-overlay">
							<div class="trainer-des">
								<h2>Olivia</h2>
								<h3>Yoga Teacher</h3>
								<ul class="social-icon">
									<li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a></li>
									<li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a></li>
									<li><a href="#" class="fa fa-behance wow fadeInUp" data-wow-delay="1.9s"></a></li>
								</ul>
							</div>
						</div>-->
				</div>
				<p>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate.</p>
			</div>

		</div>
	</div>
</section>

<!-- =========================
    TESTIMONIAL SECTION   
============================== -->
<section id="testimonial" class="parallax-section">
	<div class="container">
		<div class="row">

			<!-- Testimonial Owl Carousel section
			================================================== -->
			<div id="owl-testimonial" class="owl-carousel">

				<div class="item col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 wow fadeInUp" data-wow-delay="0.6s">
					<i class="fa fa-quote-left"></i>
					<h3>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate.</h3>
					<h4>Sandar ( Fashion Designer )</h4>
				</div>

				<div class="item col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 wow fadeInUp" data-wow-delay="0.6s">
					<i class="fa fa-quote-left"></i>
					<h3>Yes! Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue.</h3>
					<h4>James Job ( Social Assistant )</h4>
				</div>

				<div class="item col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 wow fadeInUp" data-wow-delay="0.6s">
					<i class="fa fa-quote-left"></i>
					<h3>Sed dapibus rutrum lobortis. Sed nec interdum nunc, quis sodales ante. Maecenas volutpat congue.</h3>
					<h4>Mark Otto ( New Cyclist )</h4>
				</div>

				<div class="item col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 wow fadeInUp" data-wow-delay="0.6s">
					<i class="fa fa-quote-left"></i>
					<h3>Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus.</h3>
					<h4>David Moore ( Pro Boxer )</h4>
				</div>
				
			</div>

		</div>
	</div>
</section>


<!-- =========================
    FOOTER SECTION   
============================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
				<h2>About Fitness</h2>
				<p>Nunc id turpis tincidunt dui volutpat hendrerit et efficitur dolor. Morbi quis tempor felis, ut dictum ipsum. Praesent venenatis rutrum interdum.</p>
			</div>

			<div class="wow fadeInUp col-md-5 col-sm-4"  data-wow-delay="0.9s">
				<h2>Contact us</h2>
                        <h5>E-Mail</h5>
                        <h4> <a href="mailto:admin@myeverydayatlas.com">admin@myeverydayatlas.com</a></h4>
					<div>
						<h5>Phone</h5>
						<h4>1800-MY-ATLAS</h4>						
					</div>
					<div>
	                    <p><a href="http://myeverydayatlas.com/techfesta/terms">Terms & Conditions</a></p>
					</div>
			</div>

			<div class="wow fadeInUp col-md-3 col-sm-4" data-wow-delay="1s">
				<h2>Follow us</h2>
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="1s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a></li>
					<li><a href="#" class="fa fa-instagram wow fadeIn" data-wow-delay="1.6s"></a></li>
					<li><a href="#" class="fa fa-youtube wow fadeInUp" data-wow-delay="1.9s"></a></li>
				</ul>
			</div>

			<div class="clearfix"></div>

			<div class="col-md-12 col-sm-12">
				<p class="copyright-text">Copyright &copy; 2019 Everyday Atlas
                    
                    | Design: <a rel="nofollow" href="http://www.techfesta.com/" target="_parent">Techfesta</a></p>
			</div>
			
		</div>
	</div>
</footer>

<!-- =========================
     SCRIPTS   
============================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>