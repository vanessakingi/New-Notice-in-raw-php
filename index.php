<?php
include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Smart Notice Board</title>
	<meta charset="UTF-8">
	<meta name="description" content="Smart Noticeboard Project">
	<meta name="keywords" content="noticeboard, final project, innovative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>



</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="container">
				<a href="#" class="site-logo">
					<img src="img/logo.png" alt="">
				</a>
				<div class="user-panel">
					<?php if ($login_session) { ?>
						<li><a href="logout.php" title="">Logout</a></li>
					<?php } else { ?>
						<a href="login.php">Login</a><span>/</span><a href="signup.php">Register</a>
					<?php } ?>
				</div>
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				<ul class="main-menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="upload.php">Upload</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="hero-text text-white">
						<h2>Smart Notice Board</h2>
						<p>You don't have to walk up and down to pin your notice/poster. we are are here to make your work easier and simplier, and maybe funnier. At comfort of your office you can put up your annoucement. Use our services and save both time and energy.</p>
					
						<div class="hero-more">
								<a href="#" class="site-btn">See Details <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Services section -->
	<section class="services-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 service-item">
					<div class="si-icon">
						<i class="flaticon-apple"></i>
					</div>
					<div class="si-content">
						<h5>Post Images</h5>
						<p>You don't have to print that poster, upload it as it is and we will display it for you. Don't worry we have you sotted </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 service-item">
					<div class="si-icon">
						<i class="flaticon-mortarboard"></i>
					</div>
					<div class="si-content">
						<h5>Text messages</h5>
						<p>No internet access and you want to send a quick text? We got you. You can send a simple SMS using your phone </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 service-item">
					<div class="si-icon">
						<i class="flaticon-idea"></i>
					</div>
					<div class="si-content">
						<h5>PDF & Word document</h5>
						<p>For now, take a screen shoot of that document you want to post and upload. But soon we will improve to enable you upload such too </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 service-item">
					<div class="si-icon">
						<i class="flaticon-medal"></i>
					</div>
					<div class="si-content">
						<h5>More Services</h5>
						<p>More upcoming services to make your office stay more enjoyable and comfortable. Stay tuned  </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->

	<!-- Benefits section  -->
	<section class="benefit-section spad">
		<div class="container">
			<div class="sec-title text-center">
				<span>#InformLikeAPro</span>
				<h2>Benefits</h2>
			</div>
			<div class="benefit-slider owl-carousel">

				<div class="benefit-item">
					<div class="cc-text">
						<h5><i class="fa fa-desktop"></i></br>Secure</h5>
						<p>No one will post on your noticeboard without your permission. You will have control on what is to be posted, by who and when.</p>
					</div>
				</div>

				<div class="benefit-item">
					<div class="cc-text">
						<h2><i class="fa fa-cogs"></i></br>Easy to Use</h2>
						<p>You dont need extra training. We have made our system so simple that anyone can use it effectively. You just need the knowledge of your computer/ phoneS</p>
					</div>
				</div>

				<div class="benefit-item">
					<div class="cc-text">
						<h2><i class="fa fa-desktop"></i></br>Prioritization</h2>
						<p>Ever looked on a noticebaord and you find less important posters pinned on top of more important ones. Worry no more, we got you and with our system, that can not happen</p>
					</div>
				</div>

				<div class="benefit-item">
					<div class="cc-text">
						<h2><i class="fa fa-code"></i></br>Accessed Remotely</h2>
						<p>You can access your noticeboard from anywhere and update it. You don't have to be physically present for you to pin the notice board. </p>
					</div>
				</div>

				<div class="benefit-item">
					<div class="cc-text">
						<h2><i class="fa fa-code"></i></br>Environment Friendly</h2>
						<p>No more papers. Save environment! As you have witnessed, noticeboard could become untidy, papers all over, some on top of other and others just fall off and makes environment unclean. Avoid this by using the Smart Noticeboard</p>
					</div>
				</div>

			</div>
		</div>
	</section>			
	<!-- Benefits section end -->

	<!-- Footer section -->
	<footer class="footer-section spad pb-0">
			<div class="container">
				<div class="footer-bottom">
					<div class="social">
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-dribbble"></i></a>
						<a href=""><i class="fa fa-behance"></i></a>
						<a href=""><i class="fa fa-linkedin"></i></a>
					</div>
					<ul class="footer-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="upload.php">Upload</a></li>
						<li><a href="about.php">About us</a></li>
						<li><a href="news.php">News</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>

				<div class="row">
					<div class="col-12">
						<p class="text-white  text-center">
	                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>	
					</div>
					
				</div>
			</div>



		</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>


</body>
</html>