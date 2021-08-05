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
                
                <h2>Salon<span>Management System</span></h2> </div>
            <!-- Menu -->
            <?php include "navbar.php"?>
            
            
        </aside>
        <!-- Main Section -->
        <div id="betty-main">
            <!-- Services Page -->
            <div class="betty-services">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                            <div class="mb-30"> <img src="images/services/789.jpg" class="img-fluid mb-30" alt="">
                                <h3>HairCut </h3>
                                <p>We can provide all most all kind of hair cuts.If you can visit us you must be setisfied some of these are</p> 
                                    <ul >
                                            <li><a >Bob cut</a></li>
                                            <li><a >Layier Cut</a></li>
                                            <li><a >Baby cut</a></li>
                            
                                            
                                        </ul>

                            </div>
                            
                            
                        </div>
                        <!-- Sidebar -->
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                            <div class="betty-sidebar-part">
                                <div class="betty-sidebar-block betty-sidebar-block-categories">
                                    <div class="betty-sidebar-block-title">Our Services</div>
                                    <div class="betty-sidebar-block-content">
                                        <ul >
                                            <li><a >Facial</a></li>
                                            <li><a >Hairstyles</a></li>
                                            <li><a >Skin Polish</a></li>
                                            <li><a > Eye Makeup</a></li>
                                            <li><a >Face Makeup</a></li>
                                            
                                        </ul>
                                         <div class="services-price-info">
                                        <h5 class="title">Bob Cut <span class="price">$27,00</span></h5>
                                        <p>We can provide the best services of hairs.</p>
                                    </div>
                                     <div class="services-price-info">
                                        <h5 class="title">Baby Cut <span class="price">$30,00</span></h5>
                                        <p>We can provide the best services of hairs.</p>
                                    </div>
                                     <div class="services-price-info">
                                        <h5 class="title">Layir Cut <span class="price">$40,00</span></h5>
                                        <p>We can provide the best services of hairs.</p>
                                    </div>
                                    </div>
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