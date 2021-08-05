<!DOCTYPE html>
<html>
<head>
  <title>Salon Manegment System</title>
  <link rel="icon" type="image/png" href="images/favicon.png" />
  <link rel="stylesheet" href="css/login.css">
  <script src="js/jquery.min.js"></script>
</head>
<body>
<div class="cotn_principal">
<div class="cont_centrar">

<div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
        
        <h2>LOGIN</h2>  
  <p>Register User Login.</p> 
  <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>SIGN UP</h2>

  
  <p>New User SignUp before Booking.</p>

  <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
</div>
  </div>
       </div>

    
    <div class="cont_back_info">
       <div class="cont_img_back_grey">
     
       </div>
       
    </div>
<div class="cont_forms" >
    <div class="cont_img_back_">
     
       </div>
<form  method="post" id="signInForm">
 <div class="cont_form_login">
<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
   <h2>LOGIN</h2>
 <input type="text" placeholder="Email" name="email_log" />
<input type="password" placeholder="Password" name="password_log"/>
<input type="hidden" name="signInForm" value="1">
<button class="btn_login" type="submit" id="submit"  onclick="cambiar_login()">LOGIN</button>

  </div>
</form>
  <form  method="post" id="signUpForm">
   <div class="cont_form_sign_up">
<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
     <h2>SIGN UP</h2>
<input type="text" placeholder="Email" name = "email" />
<input type="text" placeholder="User" name = "username"/>
<input type="password" placeholder="Password" name = "password"/>
<input type="password" placeholder="Confirm Password" name="confirm_password"/>
<input type="hidden" name="signUpForm" value="1">
<button class="btn_sign_up" type="submit" id="submit" onclick="cambiar_sign_up()">SIGN UP</button>
     

  </div>
</form>
    </div>
    
  </div>
 </div>
 <script src="js/reg.min.js"></script>
 <script>
        $(function () {
            $('#signInForm').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: 'core/actions.php',
                    data: $('#signInForm').serialize(),
                    success: function (val) {
                        console.log(val);
                        if (val == "0" || val == "") {
                          alert("Email or Password is invalid!");
                        } else {
                            setTimeout(function () {
                                location.replace('home.php');
                            }, 500);
                        }
                    }
                });

            });
        })
        $(function () {
            $('#signUpForm').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: 'core/actions.php',
                    data: $('#signUpForm').serialize(),
                    success: function (val) {
                        console.log(val);
                        if (val == "0" || val == "") {
                          alert("Sorry... Email already regisrtered!");
                          setTimeout(function () {
                            location.reload();
                            }, 500);
                        } else {
                            if (val == "2") {
                              alert("Your password and confirmation password do not match!");
                              setTimeout(function () {
                                location.reload();
                              }, 500);
                                
                            } 
                            else if (val == "1") {
                              alert("Fill all the fields!");
                              setTimeout(function () {
                                location.reload();
                              }, 500);
                                
                            } 
                            else {
                              alert("Registration completed!");
                              setTimeout(function () {
                                location.reload();
                              }, 500);
                            }



                        }
                    }
                });

            });
        })
        
    </script>
</div>
</body>
</html>