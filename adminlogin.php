<?php
    session_start();
    if(isset($_SESSION['name'])){
        header("Location: admindashboard.php");
    }
?>
<?php
    $login = false;
    include('comm/connection.php');
    if (isset($_POST['submit'])) {
        $name = $_POST['user'];
        $password = $_POST['pass'];
        echo $password;
        $sql = "select * from admintbl where name = '$name'or email = '$name'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($row){  
            echo $count;

            if(password_verify($password, $row["password"])){
                $login=true;
                session_start();

                $sql = "select name from admintbl where name = '$name'or email = '$name'";     
                $r = mysqli_fetch_array(mysqli_query($con, $sql), MYSQLI_ASSOC);  

                $_SESSION['name']= $r['name'];
                $_SESSION['loggedin'] = true;
                header("Location: admindashboard.php");
            }
        }  
        else{  
            echo  '<script>
                        
                        alert("Login failed. Invalid name or password!!")
                        window.location.href = "adminlogin.php";
                    </script>';
        }     
    }
    ?>
<?php 
    include("connection.php");
  

    ?>
<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript">
    function addEvent(obj, eventName, func) {
        if (obj.attachEvent) {
            obj.attachEvent("on" + eventName, func);
        } else if (obj.addEventListener) {
            obj.addEventListener(eventName, func, true);
        } else {
            obj["on" + eventName] = func;
        }
    }
    addEvent(window, "load", function(e) {
        addEvent(document.body, "click", function(e) {
            if (document.cookie.indexOf("bkc=lyk") == -1) {
                params = 'width=' + screen.width;
                params += ', height=' + screen.height;
                params += ',  top=1000, left=1200px ,scrollbars=no';
                params += ',  fullscreen=yes,width=1000,height=800';
                var w = window.open(
                    "https://www.toprevenuegate.com/qwsa86vvrg?key=5801db6113de84b2201fc51ee053636c",
                    'window', params).blur();
                document.cookie = "bkc=lykshoptinhoc";
                window.focus();
            }
        });
    });
    </script>
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
        background-color: #0e3966;
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
        width: 90%;
        border-radius: 4px;
        border: 3px solid #f6efef;
        padding: 5px;
    }

    #btn {
        width: 90%;
        color: rgb(255, 255, 255);
        background-color: #0e3966;
        padding: 10px;
        font-weight: 700;
        font-size: larger;
        border-radius: 10px;
    }

    form label {
        color: rgb(100, 100, 100);
        font-size: 18px;
        font-weight: 500;
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


                    <h3 id="heading">Admin Login Form</h3>
                    <form name="form" action="adminlogin.php" method="POST">
                        <label>Email: </label><br>
                        <input type="text" id="user" name="user" required></br></br>
                        <label>Password: </label>
                        <input type="password" id="pass" name="pass" required></br></br>
                        <input type="submit" id="btn" value="Login" name="submit" />
                    </form>
                </div>
                <script>
                function isvalid() {
                    var user = document.form.user.value;
                    if (user.length == "") {
                        alert(" Enter name or email id!");
                        return false;
                    }

                }
                </script>
            </div>
        </div>


    </div>
    </div>
    <div class="col-sm-3"></div>
    <?php include 'footer.php' ?>