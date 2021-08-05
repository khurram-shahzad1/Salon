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
    <title>Salon Management System</title>
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
                
                <h2>Salon<span>Management System</span></h2>
            </div>
            <!-- Menu -->
            <?php include "navbar.php"?>
            
        
        </aside>
        <!-- Main Section -->
        <div id="betty-main">
            <!-- About Us -->
            <div class="betty-about">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <h2 class="betty-heading">About Us</h2> <span class="heading-meta">Welcome and get best service!</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft"> <img src="images/about.jpg" class="img-fluid mb-30" alt=""> </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <p>We can  provide an interface where the users can book  the services acording to their requirment.The main purpose of our site is to develop an automated system to eliminate the problems in the existing paper based system. </p>
                            <p>It will save the time as well as the appointments and details of the customers will be managed. </p>
                            <p>We can provide the best services acording to your requirment. </p>
                            <br />
                            
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