<?php
include('session.php');
include("dbconnection.php");
$errors = array();

if (!$login_session) {
	echo "Please Login";
	header('Refresh: 2; URL = login.php');
}

if (isset($_POST['upload'])) {
// Get image name
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $image = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];

    $urgent = mysqli_real_escape_string($connection,$_POST['urgent']);
    $important = mysqli_real_escape_string($connection,$_POST['important']);
    $user_id = $_SESSION['user_id'];
    $department = $_SESSION['department'];
    $username = $_SESSION['username'];

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    array_push($errors, "Incorrect format! Upload only photos");
    }
    else{
        if ($urgent == "yes" && $important == "yes"){
            move_uploaded_file($image, $target_dir ."image1"."."."png");
        }elseif ($urgent == "yes" && $important == "no") {
            move_uploaded_file($image, $target_dir ."image2"."."."png");
        }elseif ($urgent == "no" && $important == "yes") {
            move_uploaded_file($image, $target_dir ."image3"."."."png");
        } else{
            move_uploaded_file($image, $target_dir ."image4"."."."png");
        }

        $sql = "INSERT INTO images (image_id, user_id, username, department, urgent, important, image_name) 
                    VALUES (NULL, '$user_id', '$username', '$department', '$urgent', '$important', '$image_name')";

        // execute query
        $query = mysqli_query($connection, $sql);
        }
        if (!$query){
            array_push($errors, "Failed to upload");
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
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/style.css" />


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

    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
        <div class="container text-white">
            <h3>Upload your Poster here!</h3>
        </div>
    </section>
    <!--  Page top end -->

    <!-- upload section -->
    <section class="upload-section spad set-bg" data-setbg="img/bg-login-form.jpg">
        <div class="container">
            <div class="row">
                <!-- <div class="wrapper"> -->
                <div class="inner">
                    <div class="col-lg-5 image-holder">
                        <figure class="pt-lg-0 pt-5">
                            <img src="img/login-form.jpg" alt="">
                        </figure>
                    </div>
                    <form class="col-lg-7 login-form" action="upload.php" method="post" enctype="multipart/form-data">
                        <?php include ('errors.php'); ?>

                        <div class="form-wrapper">
                            <Input type="file" name="image"><br>
                            <br>
                        </div>

                        <div class="form-wrapper">
                            <label>Urgency</label><br>
                            <input type="radio" name="urgent" value="yes"> Urgent &nbsp&nbsp
                            <input type="radio" name="urgent" value="no"> Not Urgent<br>
                            <br>
                        </div>

                        <div class="form-wrapper">
                            <label>Importance</label><br>
                            <input type="radio" name="important" value="yes">Important &nbsp&nbsp
                            <input type="radio" name="important" value="no"> Not Important<br>
                            <br>
                        </div>

                        <div class="form-wrapper">
                            <button type="submit" name="upload" class="site-btn"> Upload</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

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
