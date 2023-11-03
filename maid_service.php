<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        
         <title> Services-Page </title>
        
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">



            
   </head>

   <body>
   <?php include_once('includes/header.php');?>
   <section class="services" id="services">
    <div class="container">
      <center> <h1>Our Services</h1> </center>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="clean servic.webp" class="card-img-top"
              alt="Cleaning Service">
            <div class="card-body">
              <h5 class="card-title">Cleaning Service</h5>
              <p class="card-text">Professional cleaning services for your
                home or office.</p>
              <a href="clean.php" class="btn btn-primary">Learn more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="cook.jpeg" class="card-img-top" alt="Cooking Service">

            <div class="card-body">
              <h5 class="card-title">Cooking Service</h5>
              <p class="card-text">Skilled cooks to prepare delicious meals
                for your family.</p>
              <a href="cooking.php" class="btn btn-primary">Learn more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="baby_sit.avif" class="card-img-top"
              alt="Babysitting Service">
            <div class="card-body">
              <h5 class="card-title">Babysitting Service</h5>
              <p class="card-text">Experienced babysitters to take care of
                your children.</p>
              <a href="baby_sit.php" class="btn btn-primary">Learn more</a>
            </div>
          </div>
          
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="nurse.webp" class="card-img-top"
              alt="Babysitting Service">
            <div class="card-body">
              <h5 class="card-title">Nursing Service</h5>
              <p class="card-text">Experienced babysitters to take care of
                your children.</p>
              <a href="elder_detail.php" class="btn btn-primary">Learn more</a>
            </div>
          </div>
          
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="japa.webp" class="card-img-top"
              alt="Babysitting Service">
            <div class="card-body">
              <h5 class="card-title">Japa Service</h5>
              <p class="card-text">Experienced babysitters to take care of
                your children.</p>
              <a href="japa_service.php" class="btn btn-primary">Learn more</a>
            </div>
          </div>
          
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="elder_ser.jpg" class="card-img-top"
              alt="Elderly Help Service">
            <div class="card-body">
              <h5 class="card-title">Elderly Help Service</h5>
              <p class="card-text">Assistance and care for the elderly to
                enhance their quality of life.</p>
              <a href="elder_service.php" class="btn btn-primary">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include_once('includes/footer.php');?>

  <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/price_rangs.js"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>

    
  
    