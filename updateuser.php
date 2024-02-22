<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$id = $_SESSION['id'];
$userid = $_SESSION['userid'];
$name = $_SESSION['name'];

if($email != false && $password != false ){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: login.php');
            }
        }else{
            header('Location:login.php');
        }
    }

}else{
    header('Location: login.php');
}
?>
<?php
 require 'comm/connection.php';          
if ((isset($_GET['upd']))) {
    
    $id=$_GET['upd'];
    $query = "SELECT * FROM usertable WHERE id=$id";
   
    $fire = mysqli_query($con, $query) or die("can not database." . mysqli_error($con));
    $row = mysqli_fetch_assoc($fire);
}
//---update----
if ((isset($_POST['update']))) {
    $name= $_POST['name'];
   $last = $_POST['last'];
   $mdl = $_POST['mdl'];
    $email = $_POST['email'];
  
    $mobile=$_POST['mobile'];
 // $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); 
 $dob = $_POST['dob'];
 $gender = $_POST['gender'];
 $trad_expe = $_POST['trad_expe'];
 $address = $_POST['address'];
 $pincode= $_POST['pincode'];
 $dmt_yes_no=$_POST['dmt_yes_no'];
 $demat_acco=$_POST['demat_acco'];

    $query = "UPDATE usertable SET name='$name', last ='$last', mdl='$mdl', email='$email', mobile='$mobile',
     dob = '$dob', gender='$gender', trad_expe='$trad_expe' , address='$address' ,pincode ='$pincode',dmt_yes_no='$dmt_yes_no',demat_acco='$demat_acco'
   where id=$id";
    $fire = mysqli_query($con, $query) or die("can not." . mysqli_error($con));
    if ($fire) {
        header("location:dashboard.php");
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trade Guru Academy</title>
    <link rel="icon" type="image/x-icon" href="img/Trade_Guru_academy.png">
    <link rel="icon" type="image/x-icon" href="img/Trade_Guru_academy.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="indexheader.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">



    <link rel="stylesheet" href="dash.css">
    <style>
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


    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!--Get your own code at fontawesome.com-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
    .content-section1 {
        background-image: linear-gradient(rgba(0, 0, 0, 0.652), rgba(0, 0, 0, 0.652)), url(nippyimage/contact-us2.jpg);
        background-repeat: no-repeat;

        /* background-position: 100px 5px; */
        color: #fff;
        background-size: cover;
        background-attachment: fixed;


        padding: 80px 0px 0px 0px;

    }

    .cc4 {
        padding: 80px 0px 80px 0px;
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
        border-radius: 20px;
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

    .privecy {
        padding: 0px 70px 0px 70px !important;
    }

    @media (max-width: 480px) {
        .p9876 {
            font-size: 15px !important;

        }

        .privecy {
            padding: 0px 10px 0px 10px !important;
        }

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
    }

    @media (max-width: 768px) {

        /* .content-section1 {

        padding: 230px 0px 100px 0px !important;
    } */
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

    .bnh1 {
        color: white;

    }

    .bnh1:hover {
        color: #2067af;

    }

    li.breadcrumb-item.active.bhm {
        color: #dcb35c;
    }

    .breadcrumb-item+.breadcrumb-item::before {
        float: left;
        padding-right: var(--bs-breadcrumb-item-padding-x);
        color: rgb(255 255 255) !important;
        content: var(--bs-breadcrumb-divider, "/");
    }
    </style>

    <style>
    .cc4 {
        font-weight: 700;
        font-family: 'Merriweather', serif;
    }
    </style>
    <style>
    li,
    a {
        text-decoration: none !important;




    }

    a.b {
        color: black;
        font-size: 17px;
        font-family: 'Merriweather', serif;
    }

    a.b2 {
        color: black;
        font-size: 17px;
        font-family: 'Merriweather', serif;
    }

    .b {
        padding: 17px 8px !important;
    }

    a.b:hover {
        text-decoration: none !important;
        color: white;
        background: #07d5fb;
        font-family: 'Merriweather', serif;


    }

    a.b2:hover {
        text-decoration: none !important;
        color: white;
        background: #07d5fb;
        font-family: 'Merriweather', serif;


    }

    ul.dropdown-menu.nbc.show {
        margin: 0px 0px 0px -36px !important;
    }

    .nav1 {
        background: white;
        padding: 0px 80px 0px 80px;


    }

    .dropdown-item {
        margin: 10px 0px 10px 0px !important;
    }

    nav.navbar.navbar-expand-lg.navbar-light.nav1.fixed-top {
        padding-top: 8px;
        padding-bottom: 5px;
    }

    .cp_wrapper section>.marquee {
        max-height: 20px;
        font-size: 17px;
    }


    section#marquee {
        isolation: isolate;
    }

    section>.marquee {
        font-size: 30;
        font-weight: 600;
        color: white;
    }

    .b {
        padding: 0px 8px;
    }

    .back {
        background-color: #055194;
        color: white !important;
        padding: 15px 50px 15px 50px !important;
        border-radius: 30px;
    }

    @media (prefers-reduced-motion: no-preference) {
        .marquee::before {
            animation: marquee 20s linear infinite;
        }

        .marquee--reverse::before {
            animation-direction: reverse;
        }
    }

    @keyframes marquee {
        0% {
            transform: translate3d(var(--translate-3d-x, -2%), 0, 0);
        }

        100% {
            transform: translate3d(calc(var(--translate-3d-x) - 5% - 1px), 0, 0);
        }
    }


    @media(max-width:767px) {
        section#marquee {
            padding-bottom: var(--padding-sectionY, 50px)
        }

        section>.marquee {
            bottom: 0;
            font-size: clamp(16px, 20vw, 32px);
        }
    }

    .block {
        background-color: #0e3966 !important;
        color: white !important;
        padding: 12px 0px 35px 0px !important;
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
        border-radius: 20px;
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
    }

    @media (max-width: 768px) {

        /* .content-section1 {

        padding: 230px 0px 100px 0px !important;
    } */
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

    .bnh1 {
        color: white;

    }

    .bnh1:hover {
        color: #2067af;

    }

    li.breadcrumb-item.active.bhm {
        color: #dcb35c;
    }

    .breadcrumb-item+.breadcrumb-item::before {
        float: left;
        padding-right: var(--bs-breadcrumb-item-padding-x);
        color: rgb(255 255 255) !important;
        content: var(--bs-breadcrumb-divider, "/");
    }

    #form {
        background-color: rgb(255, 255, 255);
        width: 28%;
        border-radius: 6px;
        margin: 120px auto;
        padding: 40px;
        box-shadow: 10px 10px 5px rgb(80, 11, 77);
        margin-top: 25px;
    }

    h1 {
        text-align: center;
    }

    input {
        width: 100%;
        border-radius: 4px;
        border: 3px solid #f6efef;
        padding: 5px;
    }

    #btn {
        width: 100%;
        color: rgb(255, 255, 255);
        background-color: #0e3966;
        padding: 10px 40px 10px 40px;
        font-weight: 700;
        font-size: larger;
        border-radius: 10px;
    }

    form label {
        color: rgb(100, 100, 100);
        font-size: 16px;
        font-weight: 400;
    }

    @media screen and (max-width: 1350px) {
        #form {
            width: 40%;
            margin-left: none;
            padding: 40px;
        }
    }

    @media screen and (max-width: 1100px) {
        #form {
            width: 50%;
            margin-left: none;
            padding: 40px;
        }
    }

    @media screen and (max-width: 700px) {
        #form {
            width: 80%;
            margin-left: none;
            padding: 40px;
        }
    }
    </style>
    </style>
</head>

<body>


    </head>

    <body>


        <nav class="topnav navbar navbar-light bg-ligh nav5 justify-content-between">
            <a href="#">
                <img src="img/Trade_Guru_academy.png" width="90px" />
            </a>

            <form class=" form-inline">
                <i class='bx bxs-user-circle'></i>
                <b class="users p-2">
                    <?php echo $fetch_info['name'] ?>
                </b>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b>.</b>
                    </button>
                    <div class=" dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="logout-user.php"><i class="fa fa-power-off"></i>
                            LogOut</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i>
                            <?php echo $fetch_info['name'] ?></a>
                        <a class="dropdown-item" href="#">Setting</a>

                    </div>
                </div>
            </form>
        </nav>
        <div class="container-fluid bgy">
            <div class="overlay ">
                <h3 class="text-center bbbb">Update
                </h3>
            </div>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="card111">
                        <br>
                        <form name="form" action="#" method="POST">
                            <div class="row">
                                <div class="col-sm">
                                    <label>First Name: </label> <br>
                                    <input type="text" id="user" name="name" value="<?php echo $row['name'] ?>" />
                                </div>
                                <div class="col-sm">
                                    <label>Last Name: </label>
                                    <input type="text" id="user" name="last" value="<?php echo $row['last'] ?>" />
                                </div>
                                <div class="col-sm">
                                    <label>Middle Name: </label>
                                    <input type="text" id="user" name="mdl" value="<?php echo $row['mdl'] ?>" />
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <label>Email: </label>
                                    <input type="email" id="email" name="email" value="<?php echo $row['email'] ?>" />
                                </div>

                                <div class="col-sm">
                                    <label>Mobile: </label>
                                    <input type="number" id="email" name="mobile"
                                        value="<?php echo $row['mobile'] ?>" />
                                </div>

                                <div class="col-sm">
                                    <label>DOB: </label>
                                    <input type="date" id="user" name="dob" value="<?php echo $row['dob'] ?>" />
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm">
                                    <label>Gander: </label>
                                    <input type="text" id="user" name="gender" value="<?php echo $row['gender'] ?>" />
                                </div>
                                <div class="col-sm">
                                    <label>Trading Experince </label>

                                    <select class="form-select form-control" aria-label="Default select example"
                                        name="trad_expe" value="<?php echo $row['trad_expe'] ?>">

                                        <option selected>select option</option>
                                        <option value=" Beginer (0-1) year">Beginer (0-1) year</option>
                                        <option value="Beginer (2-4) year">Beginer (2-4) year</option>
                                        <option value="Beginer (5+) year"> Beginer (5+) year </option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <label>Address: </label>
                                    <input type="text" id="user" name="address" value="<?php echo $row['address'] ?>" />
                                </div>
                            </div><br>
                            <label>PinCode: </label>
                            <input type="number" id="user" name="pincode" value="<?php echo $row['pincode'] ?>" />
                            <br>
                            <label>alredy have a demat account ? </label>

                            <select class="form-select form-control " aria-label="Default select example"
                                name="dmt_yes_no" id="ddlPassport" onchange="ShowHideDiv()"
                                value="<?php echo $row['$dmt_yes_no']?>">

                                <option selected>Select Option</option>
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>

                            <div id="dvPassport" style="display: none" class="my-3">
                                <select class="form-select form-control" aria-label="Default select example"
                                    name="demat_acco" value="<?php echo $row['$demat_acco']?>">

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

                            <br>
                            <div class="d-flex p ">

                                <div class="p"> <input type="submit" id="btn" value="Update" name="update" />
                                </div>
                                <div class="p- ">
                                </div>
                            </div>


                        </form>

                        </form>
                    </div>
                </div>


            </div>
        </div>








        </div>



        </div>
        </div>
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
        <?php include 'footer.php' ?>