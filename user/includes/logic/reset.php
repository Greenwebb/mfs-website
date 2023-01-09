<?php 
session_start();
require "../config.php";
extract($_POST);
$email = "";
$name = "";


//if user signup button

    //if user click verification code submit button
    if(isset($check)){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $otp);
        $check_code = "SELECT * FROM clients WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE usertable SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location: home.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click login button
   

    //if user click continue button in forgot password form
    if(isset($reset)){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM clients WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE clients SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Mighty Finance Account Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: theegreenweb@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "sent";
                    echo $info;
                    $_SESSION['account_success'] = $email;
                    exit();
                }else{
                    echo "Failed while sending code!";
                }
            }else{
                echo "Something went wrong!";
            }
        }else{
           echo "This email address does not exist!";
        }
    }

    //if user click check reset otp button
    if(isset($confirm)){
        $otp_code = mysqli_real_escape_string($con, $otp);
        $check_code = "SELECT * FROM clients WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['id'];
            $_SESSION['id'] = $email;
            $_SESSION['account_success'] = "Please create a new password that you don't use on any other site";
            header('location: ../../change_pass.php');
            exit();
        }else{
            echo "incorrect code!";
             $_SESSION['account_error'] = "Incorect OTP confirmation code!";
            header('location: ../../reset_pass.php');
        }
    }

    //if user click change password button
    if(isset($change_password)){
     
        $password = mysqli_real_escape_string($con, $pass1);
        $cpassword = mysqli_real_escape_string($con, $pass2);
        if($password !== $cpassword){
            $_SESSION['account_error'] = "Confirm password not matched!";
            header('location: ../../change_pass.php');
        }else{
            $code = 0;
            $uid = $_SESSION['id']; //getting this email using session
            $encpass = md5($password);
            $update_pass = "UPDATE clients SET code = $code, password = '$encpass' WHERE email = '$uid'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
               $_SESSION['account_success'] = "Your has been password changed. Now you can login with your new password.";
               
                header('Location: ../../change_pass.php');
            }else{
                 $_SESSION['account_error'] = "Failed to change your password!";
            }
        }
    }

?>