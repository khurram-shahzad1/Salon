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
    <link type="text/css" rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />  
    <style>#betty-main
{
	background: url(images/slider/01.jpg);
	background-repeat: no-repeat;
	background-size: cover;
}</style>
</head>

<body>
    <div id="betty-page"> <a href="#" class="js-betty-nav-toggle betty-nav-toggle"><i></i></a>
        <!-- Sidebar Section -->
        <aside id="betty-aside">
            <!-- Logo -->
            <div>
                
                <h1> Salon <span>Management System</span></h1> </div>
            <!-- Menu -->
            <?php include "navbar.php"?>
            
          
        </aside>
        <!-- Main Section -->
        <div id="betty-main">
           <!-- Booking -->
            <div class="betty-blog">
               

                <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>Book Appointment</h1>
                        </div>
                        <form  method="post" id="enterbooking" >
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Name</span>
                                        <input class="form-control" type="text" name = "name" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Email</span>
                                        <input class="form-control" type="email" name = "email" placeholder="Enter your email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Phone</span>
                                <input class="form-control" type="tel" name = "phone" placeholder="Enter your phone number">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Service</span>
                                <input class="form-control" type="text" name = "service" placeholder="Enter service you want">
                            </div>
                            <input type="hidden" name="enterbooking" value="1">
                            
                            <div class="form-btn">
                                <button class="submit-btn" type="submit" > BOOK NOW</button>
                            </div>
                        </form>
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
        <script>
         
        $(function () {
            $('#enterbooking').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: 'core/actions.php',
                    data: $('#enterbooking').serialize(),
                    success: function (val) {
                        console.log(val);
                        if (val == "0" || val == "") {
                          alert("Error occur!");
                        } else {
                            setTimeout(function () {
                                alert("Appointment booked!");
                                location.reload();
                            }, 500);
                        }
                    }
                });

            });
        })
        </script>
    </div>
</body>

</html>