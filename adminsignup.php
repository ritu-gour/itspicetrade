<?php
    session_start();
    if(isset($_SESSION['name'])){
        header("Location: admindashboard.php");
    }
?>
<?php
$msg1 = "";
    include("comm/connection.php");
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpass']);
        
        $sql="select * from admintbl where mobile='$mobile'";
        $result = mysqli_query($con, $sql);
        $count_user = mysqli_num_rows($result);
        // $msg1 = "<div class='alert alert-success'> Email already exists!!</div>";
        $sql="select * from admintbl where email='$email'";
        $result = mysqli_query($con, $sql);
        $count_email = mysqli_num_rows($result);
        
        // $msg1 = "<div class='alert alert-success'> Email already exists!!</div>";
        if($count_user == 0 & $count_email==0){
            if($password==$cpassword){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO admintbl(name, email, mobile, password) VALUES('$name','$email','$mobile', '$hash')";
                $result = mysqli_query($con, $sql);
                if($result){
                    header("Location: adminlogin.php");
                }
            }
            
        }
        
    }
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
        background-image: linear-gradient(rgba(0, 0, 0, 0.652), rgba(0, 0, 0, 0.652)), url(nippyimage/paymonk-case-study-banner.jpg);
        background-repeat: no-repeat;

        /* background-position: 100px 5px; */
        color: #fff;
        background-size: cover;
        background-attachment: fixed;


        padding: 150px 0px 0px 0px;

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

    .bnh3 {
        color: white;

    }

    .bnh3:hover {
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

    h3 {
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
</head>

<body>
    <?php include 'header.php' ?>


    <br><br>





    <br><br>

    <div class="container my-5">

        <div class="row">

            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="card111">
                    <br><br>
                    <h2 class="text-center">Admin Signup Form</h2>
                    <!-- <?php echo $msg1; ?> -->
                    <p class="error"></p>
                    <form name="form" action="#" method="POST">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Name : </label>
                                <input type="text" id="user" name="name" require />

                            </div>

                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                <label>Email: </label>
                                <input type="email" id="userl" name="email" require />


                            </div>
                            <div class="col-sm-6">
                                <label>Mobile: </label>
                                <input type="number"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    type="number" maxlength="10" class="no-outline" id="user" name="mobile" require />

                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm">
                                <label>Password: </label>
                                <input type="password" id="pass" name="password" require />


                            </div>
                            <div class="col-sm">
                                <label>Retype Password: </label>
                                <input type="password" id="cpass" name="cpass" require />

                            </div>

                        </div>


                        <br><br>

                        <div class=" d-flex p ">

                            <div class=" p"> <input type="submit" id="btn" value="Submit" name="submit" />
                            </div>
                            <div class="p- "><input type="reset" id="btn" name="reset" value="Cancel"
                                    onclick="myFunction()">
                            </div>
                        </div>


                    </form>

                    </form>
                </div>
            </div>


        </div>
    </div>
    <script type="text/javascript">
    function myFunction() {
        alert("Registration Cancelled!");
    }
    </script>
    <div class="col-sm-3"></div>
    <?php include 'footer.php' ?>