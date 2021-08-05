<!DOCTYPE html>
<html lang="en">

<head>
<title>Admin Panel</title>
  <link rel="icon" type="image/png" href="../images/favicon.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/javascript.js"></script>

</head>

<body>
<form  method="post" id="signInForm">
  <h2><span class="entypo-login"><i class="fa fa-sign-in"></i></span> Admin Login</h2>
  <button class="submit"><span class="entypo-lock"><i class="fa fa-lock"></i></span></button>
  <span class="entypo-user inputUserIcon">
     <i class="fa fa-user"></i>
   </span>
  <input type="text" class="user" name="email_log" placeholder="ursername"/>
  <span class="entypo-key inputPassIcon">
     <i class="fa fa-key"></i>
   </span>
   <input type="hidden" name="signInForm" value="1">
  <input type="password" class="pass" name="password_log" placeholder="password"/>
</form>
<script>
        $(function () {
            $('#signInForm').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: '../core/actions.php',
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
        </script>
</body>

</html>