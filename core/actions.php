<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\Exception;

date_default_timezone_set('Etc/UTC');

// require '/var/www/etorotradeforex.com/trade/assets/api/PHPMailer/vendor/';
include 'connection.php';
require 'PHPMailer/vendor/autoload.php';
// require 'twilio/twilioActions.php';

if (isset($_POST['signInForm'])) {
    $email = $_POST['email_log'];
        $password = $_POST['password_log'];

    if ($email=="" || $password=="") {
        echo "0";
    }

    else {
            $sql="SELECT * FROM `user` WHERE email = '$email' AND `password` = '$password' ";

            $query=mysqli_query($con, $sql);

            if (mysqli_num_rows($query) > 0) {

                $data=mysqli_fetch_array($query);

                echo $data['id'];
                setcookie("user_id", $data['id'], time() + (86400 * 3), '/');

            }
            
        }

       
    }

    if (isset($_POST['signUpForm'])) {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirm_password=$_POST['confirm_password'];
        $username = $_POST['username'];
        $sql_e = "SELECT * FROM user WHERE email='$email'";
        $res_e = mysqli_query($con, $sql_e);	
        if(mysqli_num_rows($res_e) > 0){
            echo "0";
          }
         elseif($password =="" || $confirm_password == "" || $email =="" || $username ==""){
            echo "1";
        }
        elseif($password != $confirm_password){
            echo "2";
        }
        else {
            $sql="INSERT into `user` (email,user,password,confirm_password) VALUES ('$email','$username', '$password', '$confirm_password')";
    
            if (mysqli_query($con, $sql)) { 
                echo "3";
            }
            else {
                echo "0";
            }
        }
    }
   
    if (isset($_POST['enterbooking'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $service = $_POST['service'];
       
    if($name=="" || $email=="" || $phone=="" || $service==""){
            echo "0";
        }
        else {
            $sql="INSERT into `booking` (name,email,phone,service) VALUES ('$name','$email' , '$phone', '$service')";
    
            if (mysqli_query($con, $sql)) { 
                $mail = new PHPMailer(true);
                try {
                    //Server settings
                    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                    $mail->isSMTP();                                            // Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                    $mail->Username   = 'salonmanagement139@gmail.com';                     // SMTP username
                    $mail->Password   = 'sfm13579';                               // SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mail->Port       = 587;                                     // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                    //Recipients
                    $mail->setFrom('salonmanagement139@gmail.com', 'Saloon');
                    $mail->addAddress($email, $name);     // Add a recipient
                    $mail->addReplyTo('salonmanagement139@gmail.com', 'Saloon');

                    // Attachments
                    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                    // Content
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = "Booking Confirmed";
                    $mail->Body    = "Your booking confirmed for $service. Thank you for choosing us.";
                    $mail->send();

                    // twilioSMS($phone, "Your booking confirmed for $service. Thank you for choosing us.");
                    // return 1;
                    echo "1";
                } catch (Exception $e) {
                    return 0;
                }
            }
            else {
                echo "0";
            }
        }
    }

    if(isset($_POST['delUser'])) {
        $uid=$_POST['delUser'];
        echo mysqli_query($con, "DELETE FROM user WHERE id = '$uid'");
    }
    if(isset($_POST['delBooking'])) {
        $bid=$_POST['delBooking'];
        echo mysqli_query($con, "DELETE FROM booking WHERE id = '$bid'");
    }
  
    if (isset($_POST['signInForm'])) {
        $email = $_POST['email_log'];
            $password = $_POST['password_log'];
    
        if ($email==""|| $password=="") {
            echo "0";
        }
    
        else {
                $sql="SELECT * FROM `admin` WHERE email = '$email' AND `password` = '$password' ";
    
                $query=mysqli_query($con, $sql);
    
                if (mysqli_num_rows($query) > 0) {
    
                    $data=mysqli_fetch_array($query);
    
                    echo $data['id'];
                    setcookie("admin_id", $data['id'], time() + (86400 * 3), '/');
    
                }
    
                else {
                    echo "0";
                }
            }
    
           
        }
        if (isset($_GET['signout1'])) {

            setcookie("user_id", "", time() - 3600, '/');
        
            header("Location: ../index.php");
        }

        if (isset($_GET['signout'])) {

            setcookie("admin_id", "", time() - 3600, '/');
        
            header("Location: ../admin/index.php");
        }

     
        if (isset($_POST['UpForm'])) {
            $email=$_POST['email'];
            $password=$_POST['password'];
            $confirm_password=$_POST['confirm_password'];
            $username = $_POST['username'];
            $userid= $_POST['UpForm'];
            if($password != $confirm_password){
                echo "0";
            }
            else {
                $sql = "UPDATE user SET  email = '$email', user = '$username', password = '$password', confirm_password = '$confirm_password' WHERE id = '$userid'";
        
                if (mysqli_query($con, $sql)) { 
                    echo "1";
                }
                else {
                    echo "0";
                }
            }
        }
?>