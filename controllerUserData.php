<?php 
session_start();
require "comm/connection.php";
$email = "";
$mobile = "";
$errors = array();

//if user signup button
if(isset($_POST['signup'])){
    $userid = rand(1, 100);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $last = mysqli_real_escape_string($con, $_POST['last']);
    $mdl = mysqli_real_escape_string($con, $_POST['mdl']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    // $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); 
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $trad_expe = mysqli_real_escape_string($con, $_POST['trad_expe']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $pincode= mysqli_real_escape_string($con, $_POST['pincode']);
    $dmt_yes_no	 = mysqli_real_escape_string($con, $_POST['dmt_yes_no']);
    $demat_acco	 = mysqli_real_escape_string($con, $_POST['demat_acco']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    
          if(empty($name))
          {
            $name_error = " *Please enter the Name";
            $error=1;
          }
          else if(!preg_match("/^[a-zA-Z ]*$/", $name))
          {
            $name_error = "*Only letters are allowed";
            $error=1;
          }
        $email_check = "SELECT * FROM usertable WHERE name = '$name'";
          $res = mysqli_query($con, $email_check);
          if(!preg_match("/^[a-zA-Z ]*$/", $name)){
            $errors['name'] = "Only letters are allowed";
          }
          


          if(empty($last))
          {
            $last_error = " *Please enter the Last";
            $error=1;
          }
          else if(!preg_match("/^[a-zA-Z ]*$/", $last))
          {
            $last_error = "*Only letters are allowed";
            $error=1;
          }
        $email_check = "SELECT * FROM usertable WHERE last = '$last'";
          $res = mysqli_query($con, $email_check);
          if(!preg_match("/^[a-zA-Z ]*$/", $last)){
            $errors['last'] = "Only letters are allowed";
          }

          
        
        



          if(empty($mdl))
          {
            $mdl_error = " *Please enter the middle";
            $error=1;
          }
          else if(!preg_match("/^[a-zA-Z ]*$/", $mdl))
          {
            $mdl_error = "*Only letters are allowed";
            $error=1;
          }
        $email_check = "SELECT * FROM usertable WHERE mdl = '$mdl'";
          $res = mysqli_query($con, $email_check);
          if(!preg_match("/^[a-zA-Z ]*$/", $mdl)){
            $errors['mdl'] = "Only letters are allowed";
          }








          
        
          if(empty($email))
        {
          $email_error = "*Please enter Email";
          $error=1;
        }
        
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
          $email_error = "*Invalid Email Format";
          $error=1;
        }
        if(empty($mobile))
        {
        $mobile_error = "*Please enter Mobile";
          $error=1;
        }
        $email_check = "SELECT * FROM usertable WHERE mobile = '$mobile'";
        $res = mysqli_query($con, $email_check);
               if(empty($mobile)){
                 $errors['mobile'] = "Please enter the mobile";
               }


              //  if(empty($image))
              //  {
              //  $image_error = "*Please enter image";
              //  $error=1;
              //  }
              //  $email_check = "SELECT * FROM usertable WHERE image =' $image'";
              //  $res = mysqli_query($con, $email_check);
              //  if(empty($image)){
              //  $errors['image']['tmp_name'] = "Please enter the image";
              //  }



               if(empty($dob))
{
$dob_error = "*Please enter dob";
$error=1;
}
$email_check = "SELECT * FROM usertable WHERE dob = '$dob'";
$res = mysqli_query($con, $email_check);
if(empty($dob)){
$errors['dob'] = "Please enter the dob";
}


if(empty($gender))
{
$gender_error = "*Please enter gender";
$error=1;
}
$email_check = "SELECT * FROM usertable WHERE gender = '$gender'";
$res = mysqli_query($con, $email_check);
if(empty($gender)){
$errors['gender'] = "Please enter the gender";
}

if(empty($trad_expe))
{
$trad_expe_error = "*Please enter trad_expe";
$error=1;
}
$email_check = "SELECT * FROM usertable WHERE  trad_expe = '$trad_expe'";
$res = mysqli_query($con, $email_check);
if(empty($trad_expe)){
$errors['trad_expe'] = "Please enter the Trad. Expe.";
}


if(empty($address))
{
$address_error = "*Please enter address";
$error=1;
}
$email_check = "SELECT * FROM usertable WHERE address = '$address'";
$res = mysqli_query($con, $email_check);
if(empty($address)){
$errors['address'] = "Please enter the address";
}


if(empty($pincode))
{
$pincode_error = "*Please enter pincode";
$error=1;
}
$email_check = "SELECT * FROM usertable WHERE pincode = '$pincode'";
$res = mysqli_query($con, $email_check);
if(empty($pincode)){
$errors['pincode'] = "Please enter the pincode";
}


if(empty($dmt_yes_no))
{
$dmt_yes_no_error = "*Please enter dmt_yes_no";
$error=1;
}
$email_check = "SELECT * FROM usertable WHERE dmt_yes_no = '$dmt_yes_no'";
$res = mysqli_query($con, $email_check);
if(empty($dmt_yes_no)){
$errors['dmt_yes_no'] = "Please enter the dmt_yes_no";
}
// if(empty($demat_acco))
// {
// $demat_acco_error = "*Please enter demat. acco.";
// $error=1;
// }
// $email_check = "SELECT * FROM usertable WHERE demat_acco = '$demat_acco'";
// $res = mysqli_query($con, $email_check);
// if(empty($demat_acco)){
// $errors['demat_acco'] = "Please enter the Feild";
// }


              














               
        if(empty($password))
          {
            $password_error = "*Please enter Password";
            $error=1;
          }
          $email_check = "SELECT * FROM usertable WHERE name = '$name'";
          $res = mysqli_query($con, $email_check);
                 if(!preg_match("/^[a-zA-Z ]*$/", $name)){
                   $errors['name'] = "Only letters are allowed";
                 }
          if(empty($cpassword))
          {
            $cpassword_error = "*Please enter Confirm password";
            $error=1;
          }
          
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM usertable WHERE mobile = '$mobile'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['mobile'] = "mobile that you have entered is already exist!";
    }
    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if(count($errors) === 0 ){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = 0;
        $status = "verified";
        $insert_data = "INSERT INTO usertable (userid, name, last, mdl, mobile, email, dob, gender, trad_expe, address, pincode, dmt_yes_no, demat_acco, password, code, status)
                        values('$userid','$name','$last', '$mdl' , '$mobile', '$email', '$dob', '$gender', '$trad_expe', '$address', '$pincode', '$dmt_yes_no', '$demat_acco', '$encpass', '$code', '$status')";
        $data_check = mysqli_query($con, $insert_data) or die("con not insert the data." . mysqli_error($con));
        if($data_check){
            // $subject = "Email Verification Code";
            // $message = "Your verification code is $code";
            // $sender = "From:gourimage48@gmail.com";
            // if(mail($email, $subject, $message, $sender)){
            //     $info = "We've sent a verification code to your email - $email";
            //     $_SESSION['info'] = $info;
            //     $_SESSION['email'] = $email;
            //     $_SESSION['password'] = $password;
            //     // header('location: user-otp.php');
            //     header('location: login.php');
            //     exit();
            // }
            // else{
            //     $errors['otp-error'] = "Failed while sending code!";
            // }
            header('location: login.php');
        }
       
        else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }

}
    //if user click verification code submit button
    // if(isset($_POST['check'])){
    //     $_SESSION['info'] = "";
    //     $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    //     $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
    //     $code_res = mysqli_query($con, $check_code);
    //     if(mysqli_num_rows($code_res) > 0){
    //         $fetch_data = mysqli_fetch_assoc($code_res);
    //         $fetch_code = $fetch_data['code'];
    //         $email = $fetch_data['email'];
    //         $id = $fetch_data['id'];
    //         $name = $fetch_data['name'];
    //         $userid = $fetch_data['userid'];
    //         $image =  $fetch_data['image'];
    //         $code = 0;
    //         $status = 'verified';
    //         $update_otp = "UPDATE usertable SET code = $code, status = '$status' WHERE code = $fetch_code";
    //         $update_res = mysqli_query($con, $update_otp);
    //         if($update_res){
    //             $_SESSION['mobile'] = $mobile;
    //             $_SESSION['email'] = $email;
    //             $_SESSION['name'] = $name;
    //             $_SESSION['id'] = $id;
    //             $_SESSION['userid'] = $userid;
    //             $_SESSION['image']=$image;
    //             header('location: dashboard.php');
    //             exit();
    //         }else{
    //             $errors['otp-error'] = "Failed while updating code!";
    //         }
    //     }else{
    //         $errors['otp-error'] = "You've entered incorrect code!";
    //     }
    // }

    //if user click login button
    if(isset($_COOKIE['emailid']) && isset($_COOKIE['password']))
{
  $emailid = $_COOKIE['emailid'];
  $password = $_COOKIE['password'];
}
else
{
  $emailid = $password ="";
}
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $check_email = "SELECT * FROM usertable WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            $fetch_id = $fetch['id'];
            $fetch_name = $fetch['name'];
            $fetch_userid=$fetch['userid'];
            $fetch_image=$fetch['image'];
            if(isset($_REQUEST['rememberMe']))
            {
              setcookie('emailid',$_REQUEST['email'],time()+60*60);//1 hour
              setcookie('password',$_REQUEST['password'],time()+60*60); //1 hour
            }
            else
            {
              setcookie('emailid',$_REQUEST['email'],time()-10);//10 seconds
              setcookie('password',$_REQUEST['password'],time()-10); //10 seconds
            }
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;

                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;
                  $_SESSION['id'] = $fetch_id;
                  $_SESSION['name'] = $fetch_name;
                  $_SESSION['userid'] = $fetch_userid;
                  $_SESSION['image'] = $fetch_image;
                  
                    header('location: dashboard.php');
                }else{
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: login.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }

    //if user click continue button in forgot password form
//     if(isset($_POST['check-email'])){
//         $email = mysqli_real_escape_string($con, $_POST['email']);
//         $check_email = "SELECT * FROM usertable WHERE email='$email'";
//         $run_sql = mysqli_query($con, $check_email);
//         if(mysqli_num_rows($run_sql) > 0){
//             $code = rand(999999, 111111);
//             $insert_code = "UPDATE usertable SET code = $code WHERE email = '$email'";
//             $run_query =  mysqli_query($con, $insert_code);
//             if($run_query){
//                 $subject = "Password Reset Code";
//                 $message = "Your password reset code is $code";
//                 $sender = "From: $email";
//                 if(mail($email, $subject, $message, $sender)){
//                     $info = "We've sent a passwrod reset otp to your email - $email";
//                     $_SESSION['info'] = $info;
//                     $_SESSION['email'] = $email;
//                     header('location: reset-code.php');
//                     exit();
//                 }else{
//                     $errors['otp-error'] = "Failed while sending code!";
//                 }
//             }else{
//                 $errors['db-error'] = "Something went wrong!";
//             }
//         }else{
//             $errors['email'] = "This email address does not exist!";
//         }
//     }

//     //if user click check reset otp button
//     if(isset($_POST['check-reset-otp'])){
//         $_SESSION['info'] = "";
//         $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
//         $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
//         $code_res = mysqli_query($con, $check_code);
//         if(mysqli_num_rows($code_res) > 0){
//             $fetch_data = mysqli_fetch_assoc($code_res);
//             $email = $fetch_data['email'];
//             $_SESSION['email'] = $email;
//             $info = "Please create a new password that you don't use on any other site.";
//             $_SESSION['info'] = $info;
//             header('location: new-password.php');
//             exit();
//         }else{
//             $errors['otp-error'] = "You've entered incorrect code!";
//         }
//     }

//     //if user click change password button
//     if(isset($_POST['change-password'])){
//         $_SESSION['info'] = "";
//         $password = mysqli_real_escape_string($con, $_POST['password']);
//         $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
//         if($password !== $cpassword){
//             $errors['password'] = "Confirm password not matched!";
//         }else{
//             $code = 0;
//             $email = $_SESSION['email']; //getting this email using session
//             $encpass = password_hash($password, PASSWORD_BCRYPT);
//             $update_pass = "UPDATE usertable SET password = '$encpass' WHERE email = '$email'";
//             $run_query = mysqli_query($con, $update_pass);
//             if($run_query){
//                 $info = "Your password changed. Now you can login with your new password.";
//                 $_SESSION['info'] = $info;
//                 header('Location: password-changed.php');
//             }else{
//                 $errors['db-error'] = "Failed to change your password!";
//             }
//         }
//     }
    
//    //if login now button click
//     if(isset($_POST['login-now'])){
//         header('Location: login.php');
//     }































    

    //if user click continue button in forgot password form
    // if(isset($_POST['check-email'])){
    //     $email = mysqli_real_escape_string($con, $_POST['email']);
    //     $check_email = "SELECT * FROM usertable WHERE email='$email'";
    //     $run_sql = mysqli_query($con, $check_email);
    //     if(mysqli_num_rows($run_sql) > 0){
    //         $code = rand(999999, 111111);
    //         $insert_code = "UPDATE usertable SET code = $code WHERE email = '$email'";
    //         $run_query =  mysqli_query($con, $insert_code);
    //         if($run_query){
    //             $subject = "Password Reset Code";
    //             $message = "Your password reset code is $code";
    //             $sender = "From: gourimage48@gmail.com";
    //             if(mail($email, $subject, $message, $sender)){
    //                 $info = "We've sent a passwrod reset otp to your email - $email";
    //                 $_SESSION['info'] = $info;
    //                 $_SESSION['email'] = $email;
    //                 header('location: reset-code.php');
    //                 exit();
    //             }else{
    //                 $errors['otp-error'] = "Failed while sending code!";
    //             }
    //         }else{
    //             $errors['db-error'] = "Something went wrong!";
    //         }
    //     }else{
    //         $errors['email'] = "This email address does not exist!";
    //     }
    // }

    // //if user click check reset otp button
    // if(isset($_POST['check-reset-otp'])){
    //     $_SESSION['info'] = "";
    //     $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    //     $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
    //     $code_res = mysqli_query($con, $check_code);
    //     if(mysqli_num_rows($code_res) > 0){
    //         $fetch_data = mysqli_fetch_assoc($code_res);
    //         $email = $fetch_data['email'];
    //         $_SESSION['email'] = $email;
    //         $info = "Please create a new password that you don't use on any other site.";
    //         $_SESSION['info'] = $info;
    //         header('location: new-password.php');
    //         exit();
    //     }else{
    //         $errors['otp-error'] = "You've entered incorrect code!";
    //     }
    // }

    // //if user click change password button
    // if(isset($_POST['change-password'])){
    //     $_SESSION['info'] = "";
    //     $password = mysqli_real_escape_string($con, $_POST['password']);
    //     $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    //     if($password !== $cpassword){
    //         $errors['password'] = "Confirm password not matched!";
    //     }else{
    //         $code = 0;
    //         $email = $_SESSION['email']; //getting this email using session
    //         $encpass = password_hash($password, PASSWORD_BCRYPT);
    //         $update_pass = "UPDATE usertable SET code = $code, password = '$encpass' WHERE email = '$email'";
    //         $run_query = mysqli_query($con, $update_pass);
    //         if($run_query){
    //             $info = "Your password changed. Now you can login with your new password.";
    //             $_SESSION['info'] = $info;
    //             header('Location: password-changed.php');
    //         }else{
    //             $errors['db-error'] = "Failed to change your password!";
    //         }
    //     }
    // }
    
   //if login now button click
    // if(isset($_POST['login-now'])){
    //     header('Location: login.php');
    // }
?>