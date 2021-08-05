<?php 
     if(!isset($_COOKIE['user_id'])){
        header("Location: index.php");
         }else{

         }
    
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Salonn Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/et-lineicons.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div id="betty-page"> <a href="#" class="js-betty-nav-toggle betty-nav-toggle"><i></i></a>
        <!-- Sidebar Section -->
        <aside id="betty-aside">
            <!-- Logo -->
            <div>
                
                <h2>Salon<span>Management System</span></h1> </div>
            <!-- Menu -->
            <?php include "navbar.php"?>
            
        </aside>
        <!-- Main Section -->
        <div id="betty-main">
            
            <!-- Makeup Services -->
            <div class="betty-makeup">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            

                            <h2 class="betty-heading animate-box" data-animate-effect="fadeInLeft">Services</h2> <span class="heading-meta animate-box" data-animate-effect="fadeInLeft">Our Services</span> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                        <img src="images/services/1.jpg" alt="">
                            <div class="betty-makeup-container">
                                <div class="betty-makeup-img-area"><span class="flaticon-039-make-up"></span></div>
                                <div class="betty-makeup-text-area">

                                    <a href="services0-page.php">

                                    <h4 class="betty-makeup-heading">Facial </h4>
                                    <p>We can provide the best facial that will satisfy you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                        <img src="images/services/123.jpg" alt="">
                            <div class="betty-makeup-container">
                                <div class="betty-makeup-img-area"><span class="flaticon-007-mascara-4"></span></div>
                                <div class="betty-makeup-text-area">
                                    <a href="services1-page.php">
                                    <h4 class="betty-makeup-heading">Eye Makeup</h4>
                                    <p>We can provide the best Eye Makeup according to your demands. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                        <img src="images/services/01.jpg" alt="">
                            <div class="betty-makeup-container">
                                <div class="betty-makeup-img-area"><span class="flaticon-013-facial-mask-1"></span></div>
                                <div class="betty-makeup-text-area">
                                    <a href="services2-page.php">

                                    <h4 class="betty-makeup-heading">Face Makeup</h4>
                                    <p>We can provide the best Face Makeup that will surely satisfy you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                        <img src="images/services/2.jpg" alt="">
                            <div class="betty-makeup-container">
                            <div class="betty-makeup-img-area"><span class="flaticon-039-make-up"></span></div>
                                <div class="betty-makeup-text-area">
                                    <a href="services3-page.php">
                                    <h4 class="betty-makeup-heading">Skin Polish</h4>
                                    <p>We can provide the best Skin Polish with different types of branded products.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                        <img src="images/services/789.jpg" alt="">
                            <div class="betty-makeup-container">
                                <div class="betty-makeup-img-area"><span class="flaticon-018-scissors"></span></div>
                                <div class="betty-makeup-text-area">
                                    <a href="services4-page.php">
                                    <h4 class="betty-makeup-heading">Haircut</h4>
                                    <p>We can provide different types of best Haircuts at reasonable prices.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <div id="betty-footer2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="betty-logo">
                                <a href="home.php"><img src="images/logo.png" alt=""></a>
                                <h2 class="text-center">Salon
                                    <span>Management System</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <div class="betty-footer">
                                <p> All Rights are Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
        </div>
        <!-- Js -->
   <script src="js/jquery.min.js"></script>
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/sticky-kit.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
    </div>
</body>

</html>