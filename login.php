<?php
   include("dbconnection.php");
   $errors = array();

   if(isset($_POST['login'])) {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($connection,$_POST['username']);
      $password = mysqli_real_escape_string($connection,$_POST['password']);
      
      if(empty($username)){
      	array_push($errors, "Username is required");
      }
      if(empty($password)){
      	array_push($errors, "Password is required");
      }

      if (count($errors) == 0){
      	$password = md5($password);
      	$sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
      	$result = mysqli_query($connection, $sql);
      	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
          

      	if(mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['department'] = $row['department'];
         	header("location: index.php");

      	 }else {

         	array_push($errors, "Username or Password is invalid");
         
      	 }
      }
   }
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

		<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container text-white">
			<h3>Login In!</h3>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Login form  -->
	<section class="login-section spad set-bg" data-setbg="img/bg-login-form.jpg">
		<div class="container">
			<div class="row">
			<!-- <div class="wrapper"> -->
				<div class="inner">
					<div class="col-lg-5 image-holder">
						<figure class="pt-lg-0 pt-5">
							<img src="img/login-form.jpg" alt="">
						</figure>
					</div>
					<form class="col-lg-7 login-form" method = "post" action = "login.php">
						<?php include ('errors.php'); ?>
						<div class="form-wrapper">
							<input type="text" name = "username" placeholder="Username" class="form-control">
						</div>

						<div class="form-wrapper">
							<input type="password" name = "password" placeholder="Password" class="form-control">
						</div>

						<div style="text-align: center;">
							<button type = "submit" name = "login" class = "site-btn">Log in</button>
						</br>
							<p> No account? <a href = "signup.php">Register here</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Login form end -->

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
	                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        </p>	
					</div>
					
				</div>
			</div>



		</footer>
		<!-- Footer section end -->


		<!--====== Javascripts & Jquery ======-->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/circle-progress.min.js"></script>
		<script src="js/main.js"></script>


</body>
</html>