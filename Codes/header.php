<?php

	session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>EverythingGames</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
  
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700, 900|Vollkorn:400i" rel="stylesheet">
<link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/jquery.fancybox.min.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/style.css">
    

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" id="home-section">

	<div class="site-wrap">
	<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
    <span class="icon-close2 js-menu-toggle"></span>
    </div>
    </div>
    <div class="site-mobile-menu-body"></div>
    </div>
  
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

      <div class="container">
      <div class="row align-items-center">
      <div class="col-6 col-xl-2">
      <h1 class="mb-0 site-logo"><a href="home.php" class="h2 mb-0"><strong>Everything</strong>Games<span class="text-primary">.</span> </a></h1>
      </div>

      <div class="col-12 col-md-10 d-none d-xl-block">
      <nav class="site-navigation position-relative text-right" role="navigation">
	  <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
	  
	  <?php
	  
		if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true)
		{
			echo '<li><a href="home.php" class="nav-link">Home</a></li>
			<li><a href="about.php" class="nav-link">About</a></li>
			<li><a href="request.php" class="nav-link">Request</a></li>
			<li><a href="news.php" class="nav-link">New Release</a></li>
			Welcome, '; echo $_SESSION['username']; echo'<li><a href="logout.php" class="nav-link">Logout</a></li>';
		}
		else
		{
			echo '<li><a href="home.php" class="nav-link">Home</a></li>
			<li><a href="about.php" class="nav-link">About</a></li>
			<li><a href="request.php" class="nav-link">Request</a></li>
			<li><a href="news.php" class="nav-link">New Release</a></li>
			<li><a href="register.php" class="nav-link">Register</a></li>
			<li><a href="login.php" class="nav-link">Login</a></li>';
		}
	  ?>
	  
	  </ul>
      </nav>
      </div>
	  
	  <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
	  </div>
      </div>
      
    </header>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/main.js"></script>