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
                <h2>Salon <span>Management System</span></h2>
            </div>
            <!-- Menu -->
            <?php include "navbar.php"?>
        
           
        </aside>
        <!-- Main Section -->
        <div id="betty-main">
            <aside id="betty-hero" class="js-fullheight">
                <!-- Slider -->
                <div class="flexslider js-fullheight">
                    <ul class="slides">
                        <li style="background-image: url(images/slider/02.jpg);">
                            <div class="overlay"></div>
          
                        </li>
                        <li style="background-image: url(images/slider/01.jpg);">
                            <div class="overlay"></div>

                        </li>
                        <li style="background-image: url(images/slider/03.jpg);">
                            <div class="overlay"></div>
                           
                        </li>
                    </ul>
                </div>
            </aside>
           
         
           
           
          
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