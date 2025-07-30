<?php
  function active($currect_page){
    $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
    $url = end($url_array);  
    if($currect_page == $url){
        echo 'active'; //class name in css 
    } 
  }
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Construction</title>

<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="rs-plugin/css/settings.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Top bar start -->
<div class="top-bar">
  <div class="container"> 
    <!-- Row Start -->
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="top-text">WE HAVE MORE THAN 25 YEARS OF EXPERIENCES</div>
      </div>
      <div class="col-md-6 col-sm-6">
        <ul class="topbar-links">
          <li><a href="mailto:info@rbcgroup.co.in"><i class="fa fa-envelope" aria-hidden="true"></i>info@rbcgroup.co.in</a></li>
          <li><a href="tel:+91-9596699332"><i class="fa fa-phone" aria-hidden="true"></i>+91-9596699332</a></li>
        </ul>
      </div>
    </div>
    <!-- Row End --> 
  </div>
</div>
<!-- Top bar end --> 

<!-- Header start -->
<div class="header">
  <div class="container"> 
    <!-- Row Rtart -->
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <div class="logo">
    <img src="images/diagram-2.jpg" alt="Company Logo" height="70">
    <span style="font-weight: bold; color:#2c2e91">AAR BEE CHOPRA GROUP</span>
</div>

<style>
    .logo {
        display: flex;
        align-items: center;
    }
    .logo img {
        margin-right: 10px; /* Adds spacing between the image and text */
    }
</style>

        <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
      </div>
      <div class="col-md-9 col-sm-9"> 
        <!--navegation-->
        <div class="navigationwrape">
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li >
                  <li class="<?php active('index.php');?>"><a href="index.php">Home</a></li>
                <li> 
                <li class="<?php active('services.php');?>"><a href="services.php"> Service</a>
                </li>
                <li> 
                <li class="<?php active('about-us.php');?>"><a href="about-us.php"> About Us</a>
                </li>
                <li> 
                <li class="<?php active('projects.php');?>"><a href="projects.php"> Projects </a>
                </li>
                <li> 
                <li class="<?php active('contact-us.php');?>"><a href="contact-us.php"> Contact Us </a>
                </li>
              </ul>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Row End --> 
  </div>
</div>

<!-- Header end --> 
                

            