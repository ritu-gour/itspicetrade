<?php

//index.php

//Include Configuration File
include('config.php');
error_reporting(0);
$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a style="color:black;" href="'.$google_client->createAuthUrl().'">Login With Google</a>';
}

?><?php require_once "controllerUserData.php";
 
//  use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html>

<head>

    <title>Trade Guru Academy</title>
    <link rel="icon" type="image/x-icon" href="img/Trade_Guru_academy.png">
    <link rel="icon" type="image/x-icon" href="img/Trade_Guru_academy.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="indexheader.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">



    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!--Get your own code at fontawesome.com-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
    .content-section1 {
        background-image: linear-gradient(rgba(0, 0, 0, 0.652), rgba(0, 0, 0, 0.652)), url(img/Business-Meeting.png);
        background-repeat: no-repeat;

        /* background-position: 100px 5px; */
        color: #fff;
        background-size: cover;
        background-attachment: fixed;


        padding: 150px 0px 0px 0px;

    }

    .cc4 {
        padding: 110px 0px 200px 0px;
        font-size: 50px;
    }


    .loginbtn {
        background: white;
        color: black !important;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        padding: 10px;
        width: 200px;
        margin: 20px 0px 0px 20px;
    }

    a {
        text-decoration: none;
    }

    a:hover {
        text-decoration: none;
    }


    .icon1 {
        background: #1d64a9;
        color: white;
        padding: 14px 17px 14px 17px;
        font-size: 25px;
        border-radius: 50%;
    }

    .icon2 {
        background: #1d64a9;
        color: white;
        padding: 14px 15px 14px 15px;
        font-size: 25px;
        border-radius: 50%;
    }

    .icon3 {
        background: #1d64a9;
        color: white;
        padding: 14px 15px 14px 15px;
        font-size: 25px;
        border-radius: 50%;
    }

    .cs {
        color: #1d64a9;
    }

    .cd,
    .cd1 {
        font-size: 18px;
        color: black;
        text-decoration: none !important;
    }

    .block {
        display: block;
        width: 100%;
        border: none;
        background-color: #00356b;
        padding: 10px 28px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        text-align: center;
        border-radius: 20px;
    }

    .control11 {
        border-radius: 5px;
    }

    .card111 {
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        padding: 30px 50px 100px 50px;
        border-radius: 20px;

    }

    .bbb {
        margin: 0px 0px 50px 0px;
        color: #1d64a9;
    }

    .mapouter {
        position: relative;
        text-align: right;
        width: 100%;
        height: 300px;
    }

    .gmap_canvas {
        overflow: hidden;
        background: none !important;
        width: 100%;
        height: 300px;
    }

    .gmap_iframe {
        height: 300px !important;
    }

    .map99 {
        width: 100%;
        height: 300px;
    }


    @media (max-width: 480px) {



        .content-section1 {

            padding: 150px 0px 10px 0px !important;
        }

        .cc4 {
            font-size: 30px !important;
            padding: 90px 0px 150px 0px !important;
        }

        .cd,
        .cd1 {
            font-size: 15px;
            color: black;
            text-decoration: none !important;
        }

        .map99 {
            width: 100% !important;
            height: 300px;
        }

        .card111 {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            padding: 30px 10px 100px 10px;
            border-radius: 20px;
            margin-top: 30px;
        }

        .signupimag {
            width: 100% !important;
        }
    }

    .iconuser {
        font-size: 70px;
        margin: -90px 0px 10px 0px;
    }

    @media (max-width: 768px) {

        /* .content-section1 {

        padding: 230px 0px 100px 0px !important;
    } */
        .iconuser {
            font-size: 50px !important;
            margin: -90px 0px 10px 0px;
        }

        .col-sm-6 {
            flex: 0 0 auto;
            width: 100% !important;
        }

        .map99 {
            width: 100% !important;
            height: 300px;
        }

        .card111 {

            margin-top: 30px;
        }
    }

    .bxs-user-circle {

        font-size: 40px;
        color: black;

    }

    .nav5 {
        background: white;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        padding: 10px 40px 10px 40px;
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: -160px;

    }

    .user {
        color: black;
        font-weight: 600;
        margin: 0px 0px 0px 0px !important;
    }

    .dropdown-toggle::after {
        display: inline-block;
        /* width: 20px; */
        /* height: 20px; */
        font-size: 40px;
        margin-left: 0.255em;
        margin-top: -90px !important;
        vertical-align: 0.255em;
        content: "";
        color: black;
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent;
        margin: 0px 0px -10px 0px;
    }

    button#dropdownMenuButton {
        background: transparent;
        border: none;
    }

    button#dropdownMenuButton:hover {
        background: transparent;
        border: none !important;
    }

    thead.bgt {
        background: #00356b !important;
        color: white !important;
    }

    .bbb {
        /* box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; */
        padding: 10px 10px 10px 10px;
    }

    .bgy {
        background-image: url(img/Portfolio.jpg);
        padding: 100px 0px 100px 0px;
        background-position: center !important;
        background-size: cover !important;
    }

    .bbbb {
        color: white !important;
        font-size: 40px !important;
    }

    @media (max-width: 480px) {



        .dropdown-menu {
            position: absolute;
            top: 100%;
            margin-top: 20px !important;
            left: -100px !important;

        }

        .bxs-user-circle {

            font-size: 30px !important;
            color: black;

        }

        .bbbb {
            color: white !important;
            font-size: 40px !important;
        }

        .bgy {
            background-image: url(img/Portfolio.jpg);
            padding: 100px 0px 100px 0px;
            background-position: center !important;
            background-size: contain !important;
        }
    }
    </style>
</head>

<body>


    <!-- <h2 class="text-center cc4">Sign Up</h2> -->






    <?php
   if($login_button == '')
   {
    echo include 'googelacount.php' ;
//     echo '
    
//     <nav class="topnav navbar navbar-light bg-ligh nav5 justify-content-between">
//     <a href="#">
//         <img src="img/Trade_Guru_academy.png" width="90px" />
//     </a>

//     <form class=" form-inline">
//     <img src="'.$_SESSION["user_image"].'" width="30px" class="img-responsive img-circle img-thumbnail" />
//         <b class="users p-2">
//         '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'
//     </b>
//     <div class="dropdown">
//         <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
//             aria-haspopup="true" aria-expanded="false">
//             <b>.</b>
//         </button>
//         <div class=" dropdown-menu" aria-labelledby="dropdownMenuButton">
//             <a class="dropdown-item" href="logout1.php"><i class="fa fa-power-off"></i>
//                 LogOut</a>
//             <a class="dropdown-item" href="#"> <img src="'.$_SESSION["user_image"].'" width="30px" class="img-responsive img-circle img-thumbnail" />
//             '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'<a>
//     <a class="dropdown-item" href="#">'.$_SESSION['user_email_address'].'</a>

//     </div>
//     </div>
//     </form>
//     </nav>
    
//     <div class="container-fluid bgy">
//         <div class="overlay ">
//             <h3 class="text-center bbbb">WelCome  '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'
//     </h3>
//     </div>
//     </div>

//    <div class="row">
//    <div class="col=sm-4"></div>
//    </div>';
    
    // <div class="panel-heading">Welcome User</div><div class="panel-body">';
    // echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    // echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    // echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    // echo '<h3><a href="logout1.php">Logout</h3></div>';
   }
   else 
   { 
    include 'header.php' ;
    echo '<div class="container my-5">

        <div class="row">

            <div class="col-sm-6 my-5">
                <img src="img/signup1.jpg" class="signupimag" />
            </div>
            <div class="col-sm-6">
                <div class="card111">
                    <br><br>

                    <h3 class="text-center bbb"> <i class="fa-solid fa-user iconuser"></i><br>Sign Up</h3>';

                    if(count($errors) == 1){
                    ?>
    <div class="alert alert-danger text-center">
        <?php
                                                foreach($errors as $showerror){
                                                    echo $showerror;
                                                }
                                                ?>
    </div>
    <?php
                                        }elseif(count($errors) > 1){
                                            ?>
    <div class="alert alert-danger">
        <?php
                                                foreach($errors as $showerror){
                                                    ?>
        <li><?php echo $showerror; ?></li>
        <?php
                                                }
                                                ?>
    </div>
    <?php
                }
                echo'  <form action="" method="POST" enctype="multipart/form-data">





                <!-- <?php echo $msg1; ?> -->
    <div class="row">
        <div class="col-sm-6">
            <div class="mb-4">';


                echo'
                <label for="exampleFormControlInput1" class="form-label">First Name</label><input
                    class="form-control control11" type="text" name="name" placeholder="First Name" value="'.$name.'" />
                ';
                echo '<span class="text-danger">';
                    if(!empty($name_error)){ echo $name_error; }
                    echo'</span>';
                echo'
            </div>
        </div>';

        echo' <div class="col-sm-6">
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                <input class="form-control control11" type="text" name="last" placeholder="Last Name"
                    value="'.$last.'" />';
                echo' <span class="text-danger">';
                    if(!empty($last_error)){ echo $last_error; }
                    echo' </span>';
                echo'
            </div>
        </div>






    </div>';

    echo' <div class="row">
        <div class="col-sm-6">
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Middle Name</label>
                <input class="form-control control11" type="text" name="mdl" placeholder="Middle Name"
                    value="'.$mdl.'" />';
                echo'<span class="text-danger">';
                    if(!empty($mdl_error)){ echo $mdl_error; }

                    echo'</span>

            </div>
        </div>
        <div class="col-sm-6">';

            echo' <label for="exampleFormControlInput1" class="form-label">Mobile No.</label>
            <input
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                type="number" maxlength="10" class="form-control control11" name="mobile" placeholder="Mobile Number"
                value="'.$mobile.'" />
            <span class="text-danger">';
                if(!empty($mobile_error)){ echo $mobile_error; }
                echo' </span>
        </div>


    </div>';

    echo' <div class="row">
        <div class="col-sm-6">
            <div class="mb-4"> <label for="exampleFormControlInput1" class="form-label">Email
                </label>

                <input class="form-control control11" type="email" name="email" placeholder="Email Address"
                    value="'.$email.'" />
                <span class="text-danger">';
                    if(!empty($email_error)){ echo $email_error; }

                    echo'</span>

            </div>
        </div>

        <div class="col-sm-6">

            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Date Of Birth</label>
                <input class="form-control control11" type="date" name="dob" placeholder="Date Of Birth"
                    value="'.$dob.'" />
                <span class="text-danger">';
                    if(!empty($dob_error)){ echo $dob_error; }

                    echo' </span>

            </div>

        </div>

    </div>';

    echo' <div class="row">
        <div class="col-sm-6">
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Gender</label>
                <select class="form-select form-control" aria-label="Default select example" name="gender"
                    value="'.$gender.'">
                    <span class="text-danger">';
                        if(!empty($gender_error)){ echo $gender_error; }
                        echo'</span>

                    <option value="male">Male</option>
                    <option value="female">Female</option>

                </select>

            </div>
        </div>
        <div class="col-sm-6">
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Trading Experince</label>
                <select class="form-select form-control" aria-label="Default select example" name="trad_expe"
                    value="'.$trad_expe.'">
                    <span class="text-danger">';
                        if(!empty($trad_expe_error)){ echo $trad_expe_error; }
                        echo'
                    </span>
                    <option selected>Select option</option>
                    <option value="Beginer (0-1) year">Beginer (0-1) year</option>
                    <option value="Beginer (2-4) year">Beginer (2-4) year</option>
                    <option value="Beginer (5+) year"> Beginer (5+) year </option>
                </select>

            </div>
        </div>


    </div>


    <div class="row mb-3">
        <div class="col-sm-6">
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Address</label>
                <input class="form-control control11" type="text" name="address" placeholder="Address"
                    value="'.$address.'" />
                <span class="text-danger">';
                    if(!empty($address_error)){ echo $address_error; }
                    echo' </span>

            </div>
        </div>
        <div class="col-sm-6">
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Pincode</label>
                <input class="form-control control11" type="number" name="pincode" placeholder="Pincode"
                    value="'.$pincode.'" />
                <span class="text-danger">';
                    if(!empty($pincode_error)){ echo $pincode_error; }
                    echo'</span>

            </div>
        </div>

        <div class="col-sm-12 ">
            <label for="exampleFormControlInput1" class="form-label">Alredy have a Demat Account ?</label>
            <select class="form-select form-control " aria-label="Default select example" name="dmt_yes_no"
                id="ddlPassport" onchange="ShowHideDiv()" value="'.$dmt_yes_no.'">
                <span class="text-danger">';
                    if(!empty($dmt_yes_no_error)){ echo $dmt_yes_no_error; }
                    echo'</span>
                <option selected>Select Option</option>
                <option value="No">No</option>
                <option value="Yes">Yes</option>
            </select>

            <div id="dvPassport" style="display: none" class="my-3">
                <label for="exampleFormControlInput1" class="form-label">Trading Demat Account</label>
                <select class="form-select form-control" aria-label="Default select example" name="demat_acco"
                    value="'.$demat_acco.'">
                    <span class="text-danger">';
                        if(!empty($demat_acco_error)){ echo $demat_acco_error; }
                        echo'</span>
                    <option selected></option>
                    <option value="HDFC securities"> HDFC securities</option>
                    <option value="ICICI direct">ICICI direct</option>
                    <option value="Kotak Securities">Kotak Securities</option>
                    <option value="Motilal Oswal">Motilal Oswal</option>
                    <option value="Sharekhan">Sharekhan</option>
                    <option value="Upstox">Upstox</option>
                    <option value="Zerodha">Zerodha</option>
                    <option value="Angel Broking">Angel Broking </option>
                    <option value="IIFL Securities">IIFL Securities</option>
                    <option value="5paisa">5paisa</option>
                    <option value="Axis Direct">Axis Direct</option>
                    <option value="Fidelity">Fidelity</option>
                    <option value="Discount Broking Account">Discount Broking Account</option>
                    <option value="Commodity trading account ">Commodity trading account </option>
                    <option value="Trade Racer Web">Trade Racer Web</option>


                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input class="form-control control11" type="password" name="password" placeholder="Password"
                    value="'.$password.'" />
                <span class="text-danger">';
                    if(!empty($password_error)){ echo $password_error; }
                    echo'</span>

            </div>
        </div>
        <div class="col-sm-6">

            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                <input class="form-control control11" type="password" name="cpassword" placeholder="Confirm password"
                    value="'.$cpassword.'" />
                <span class="text-danger">';
                    if(!empty($cpassword_error)){ echo $cpassword_error; }
                    echo'</span>
            </div>
        </div>

    </div>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <button type="submit" class="block" name="signup">Submit</button>
        </div>
        <div class="col-sm-6">
            <button type="reset" id="btn" class="block" name="reset" value="Cancel"
                onclick="myFunction()">Cancel</button>
        </div>


    </div>

    <div class="link login-link" style="margin:10px 10px 0px 10px;">Already a member? <a href="login.php">Login
            here</a>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="loginbtn"><img src="google.png" width="20px " /> '.$login_button . '</div>
        </div>
        <div class="col-sm-6">

        </div>
    </div>
    </form>';




























    echo '
    </div>
    </div>
    \



    </div>
    </div>';

    }
    ?>
    <div class="col-sm-3"></div>
    <script type="text/javascript">
    function myFunction() {
        alert("Registration Cancelled!");
    }
    </script>
    <script type="text/javascript">
    function ShowHideDiv() {
        var ddlPassport = document.getElementById("ddlPassport");
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = ddlPassport.value == "Yes" ? "block" : "none";
    }
    </script>










    <script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
    </script>
    <?php include 'footer.php' ?>