<?php 
     if(!isset($_COOKIE['admin_id'])){
        header("Location: index.php");
         }else{

         }
         require "../core/connection.php";

	if(isset($_GET["uid"])){
		$uid = $_GET["uid"];
		$sql = "SELECT * FROM user WHERE id = '$uid'";
		$query = mysqli_query($con, $sql);
		$data = mysqli_fetch_array($query);
	}
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Admin Panel</title>
  <link rel="icon" type="image/png" href="../images/favicon.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/update.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/javascript.js"></script>
   

</head>

<body>
<?php
include 'navbar.php'; ?>
  <form  method="post" id="UpForm" >
  <h2><span class="entypo-login"><i class="fa fa-sign-in"></i></span> Update User</h2>
  <button class="submit"><span class="entypo-lock"><i class="fa fa-lock"></i></span></button>
  <input type="text"  name = "email" value="<?php echo $data['email'];?>"/>
  <br>
<input type="text" name = "username" value="<?php echo $data['user'];?>"/>
  <br>
  <input type="text"  name = "password" value="<?php echo $data['password'];?>"/>
  <br>
   <input type="text"  name="confirm_password" value="<?php echo $data['confirm_password'];?>"/>
   <input type="hidden" name="UpForm" value="<?php echo $data['id'];?>">
</form>
<script>

       $(function () {
            $('#UpForm').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: '../core/actions.php',
                    data: $('#UpForm').serialize(),
                    success: function (val) {
                        console.log(val);
                        if (val == "0" || val == "") {
                          alert("Your password and confirmation password do not match!");
                          setTimeout(function () {
                            location.reload();
                            }, 500);
                        } else {
                              alert("User Updated!");
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