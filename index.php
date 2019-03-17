<?php

require('functions.php');

$search_key = $_GET['search_key'];
$page_number = 1;

$style = '<style>.card{display: inline-block;}</style>';
$content = '<!DOCTYPE html>

<html lang="zxx">
<head>
	<title>GlassCollege</title>
	<meta charset="UTF-8">
	<meta name="description" content="GlassCollege">
	<meta name="keywords" content="cloud, hosting, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>
    '.$style.'
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<a href="index.html" class="site-logo">
				<img src="img/glassCollegeLogo.png" alt="logo">
			</a>
			<!-- Switch button -->
			<div class="nav-switch">
				<div class="ns-bar"></div>
			</div>
			<div class="header-right">
				<ul class="main-menu">
                    <form action="index.php">
					<div class="topnav">
                        <strong style = "color: white">Search Engine</strong><input type="text" name = "search_key">
                        <input type="submit" value = "Submit" >
                    </div>
                    </form>
				</ul>
				<div class="header-btns">
					<a href="video_upload.php" class="site-btn sb-c1">Upload</a>
					<a href="login.html" class="site-btn sb-c2">Login</a>
					<a href="register.html" class="site-btn sb-c3">Register</a>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel style = "border: right 30px;">
			'.generate_carousel_items($search_key).'
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Footer top section -->
	<section class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-12">
					<div class="footer-widget about-widget">
						<img src="img/glassCollegeLogo.png" alt="">
						<p>Sed ultrices interdum libero, laoreet facilisis dui fringilla ut. Nullam nisi sem, tristique ut sapien nec, tempus auctor purus. Maecenas eu lectus non dolor euismod dignissim vitae vel tortor. </p>
						<div class="social-links">
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-4">
					<div class="footer-widget">
						<h5 class="fw-title">Our Products</h5>
						<ul>
							<li><a href="#">Web Hosting</a></li>
							<li><a href="#">Reseller Hosting</a></li>
							<li><a href="#">VPS Hosting</a></li>
							<li><a href="#">Dedicated Servers</a></li>
							<li><a href="#">Windows Hosting</a></li>
							<li><a href="#">Cloud Hosting</a></li>
							<li><a href="#">Linux Servers</a></li>
							<li><a href="#">WordPress Hosting</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-4">
					<div class="footer-widget">
						<h5 class="fw-title">Our Solutions</h5>
						<ul>
							<li><a href="">Reseller Hosting</a></li>
							<li><a href="">WordPress Hosting</a></li>
							<li><a href="">VPS Hosting</a></li>
							<li><a href="">Dedicated Servers</a></li>
							<li><a href="">Windows Hosting</a></li>
							<li><a href="">Cloud Hosting</a></li>
							<li><a href="">Linux Servers</a></li>
							<li><a href="">Web Hosting</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-4">
					<div class="footer-widget">
						<h5 class="fw-title">Our Products</h5>
						<ul>
							<li><a href="#">Dedicated Servers</a></li>
							<li><a href="#">Windows Hosting</a></li>
							<li><a href="#">Cloud Hosting</a></li>
						</ul>
					</div>
					<div class="footer-widget">
						<h5 class="fw-title">Company</h5>
						<ul>
							<li><a href="#">Dedicated Servers</a></li>
							<li><a href="#">Windows Hosting</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->


	
	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="footer-nav">
				<ul>
					<li><a href="home.html">Home</a></li>
					<li><a href="about.html">About us</a></li>
					<li><a href="service.html">Services</a></li>
					<li><a href="blog.html">News</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="copyright">
				<p><!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>';
    
echo $content;

?>
