<?php
include("dbconnection.php");

	$fullname = "";
	$department = "";
	$username = "";
	$email = "";
	$errors = array();

if (isset ($_POST['register'])){
	 $fullname = mysqli_real_escape_string($connection,$_POST['fullname']);
	 $department = mysqli_real_escape_string($connection,$_POST['department']);
     $email = mysqli_real_escape_string($connection,$_POST['email']);
	 $username = mysqli_real_escape_string($connection,$_POST['username']);
     $password_1 = mysqli_real_escape_string($connection,$_POST['password_1']);
	 $password_2 = mysqli_real_escape_string($connection,$_POST['password_2']);
	 
	 if (empty($fullname)){
		 array_push($errors, "Full names Required");
	 }
	 if (empty($username)){
		 array_push($errors, "Username Required");
	 }
	 if (empty($email)){
		 array_push($errors, "Email required Required");
	 }
  	 if (empty($password_1)){
		 array_push($errors, "Password Required"); 
	 }
	 if ($password_1 != $password_2){
		array_push($errors, "The two passwords must match");
	 }
	 if (strlen($password_1)<5){
		array_push($errors, "The password must be atleast 5 characters");
	 }

	 $check_user = "SELECT * FROM user WHERE username = '$username'";
	 $user_checked = mysqli_query($connection, $check_user);

     if(mysqli_num_rows($user_checked) == 1) {
     	array_push($errors, "Username is taken");
     }

     $check_email = "SELECT * FROM user WHERE email = '$email'";
	 $email_checked = mysqli_query($connection, $check_email);

     if(mysqli_num_rows($email_checked) == 1) {
     	array_push($errors, "Email is taken");
     }
	
	 if (count($errors)== 0){
		$password = md5($password_1);
		$sql = "INSERT INTO users (user_id, full_name, email, username, password, department)
		            VALUES (NULL, '$fullname', '$email', '$username', '$password', '$department')";
		
		$register = mysqli_query ($connection, $sql);
	}
    if (!$register){
        array_push($errors, "Failed to Register");  
    }else{
    echo "Success";
	header('Refresh: 2; URL = index.php');
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
				<div class="user-panel">
					<a href="login.php">Login</a><span>/</span><a href="signup.php">Register</a>
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

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container text-white">
			<h3>Register Today!</h3>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Registration form  -->
	<section class="reg-section spad set-bg" data-setbg="img/bg-registration-form.jpg">
		<div class="container">
			<div class="row">
			<!-- <div class="wrapper"> -->
				<div class="inner">
					<div class="col-lg-5 image-holder">
						<figure class="pt-lg-0 pt-5">
							<img src="img/registration-form.jpg" alt="">
						</figure>
					</div>
					<!-- <div class="image-holder">
						<img src="img/registration-form-1.jpg" alt="">
					</div> -->
					<form class="col-lg-7" method = "post" action = "signup.php">
						<h3>Registration Form</h3>
						<?php include ('errors.php');?>
						<div class="form-wrapper">
							<input type="text" name = "fullname" placeholder="Full name" class="form-control">
						</div>
						<div class="form-wrapper">
							<input type="text" name = "username" placeholder="Username" class="form-control">
						</div>
						<div class="form-wrapper">
							<input type="text" name = "email" placeholder="Email Address" class="form-control">
						</div>
						<div class="form-wrapper">
							<input type="text" name = "department" placeholder="Department" class="form-control">
						</div>
						<div class="form-wrapper">
							<input type="password" name = "password_1" placeholder="Password" class="form-control">
						</div>
						<div class="form-wrapper">
							<input type="password" name = "password_2" placeholder="Confirm Password" class="form-control">
						</div>
						<div style="text-align: center;">
							<button type = "submit" name = "register" class = "site-btn">Register</button>
						</br>
							<p> Already a member? <a href = "login.php">Sign in</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Registration form end -->

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
		<script src="js/circle-progress.min.js"></script>
		<script src="js/main.js"></script>


</body>
</html>