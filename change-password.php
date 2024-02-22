<?php


include "comm/connection.php";
                     
if ((isset($_GET['upd1']))) {
    $userid = mysqli_real_escape_string($con, $_GET['upd1']);
    $query = "SELECT * FROM usertable WHERE userid='$userid'";
    $fire = mysqli_query($con, $query) or die("can not database." . mysqli_error($con));
    $row = mysqli_fetch_assoc($fire);
}
//---update----
$msg = ''; 
if ((isset($_POST['update']))) {
    // $name = mysqli_real_escape_string($con, $_POST['name']);
    // $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    // $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $msg = "<div class='alert alert-danger text-center'>Confirm password not matched!</div>";
    }
    else{
    $encpass = password_hash($password, PASSWORD_BCRYPT);
    $code = 0;
    $status = 'verified';
    $query = "UPDATE usertable SET password='$encpass', code = '$code', status = '$status' where userid=$userid";
    $fire = mysqli_query($con, $query) or die("can not." . mysqli_error($con));
    if ($fire) {
        header("location:dashboard.php");
      
        
    }
    
}
}
    
?>

<!DOCTYPE html>
<html lang="en">


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
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
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

    <?php include 'header.php' ?>
    <br> <br> <br> <br> <br>
    <div class="container">
        <div class=" row">
            <div class="col-sm-4"> </div>
            <div class="col-sm-4"> <br> <br>
                <div class="card111">
                    <h3 class="text-center mb-4"> Change Password</h3>
                    <form name="signup" id="signup" action="#" method="POST">


                        <?php echo $msg; ?>

                        <div class="input-group mb-2 mr-sm-2">
                            <input class="form-control control11" type="password" name="password" placeholder="Password"
                                required>
                        </div>
                        <div class="input-group mb-2 mr-sm-2">
                            <input class="form-control control11" type="password" name="cpassword"
                                placeholder="Confirm password" required>
                        </div>



                        <div class="input-group my-2">
                            <input class="form-control button" type="submit" name="update" value="Change Password"
                                style="background-color:#01253a ; color: white; border-radius:4px;padding:10px 10px 35px 10px; font-size:18px;">
                        </div>





                    </form>

                </div>
            </div>
        </div>
        <div class="col-sm-4">
        </div>

    </div>

    <?php include 'footer.php' ?>