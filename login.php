<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html>

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
    border-radius: 20px;
}

.card111 {
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
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
</style>
</head>

<body>
    <?php include 'header.php' ?>

    <!-- <section class="content-section1">

        <div class="container">
            <h2 class="text-center cc4">Login</h2>
        </div>
    </section>
 -->




    <br><br>

    <div class="container my-5">

        <div class="row">

            <div class="col-sm-6 my-">
                <img src="img/login.jpg" class="signupimag" />
            </div>
            <div class="col-sm-6">
                <div class="card111">
                    <br><br>

                    <h3 class="text-center bbb"> <i class="fa-solid fa-user iconuser"></i><br>Login</h3>
                    <form action="login.php" method="POST">
                        <!-- <?php echo $msg1; ?> -->
                        <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                        <div class="mb-4">

                            <input class="form-control control11" type="email" name="email" placeholder="Email Address"
                                required value="<?php echo $email ?>">

                        </div>

                        <div class="mb-4">

                            <input class="form-control controll11" type="password" name="password"
                                data-parsley-trigger="keyup" placeholder=" Password" required
                                value="<?php echo $email ?>">

                        </div>
                        <input type="checkbox" name="rememberMe" id="rememberMe"> <label for="rememberMe">Remember
                            me</label>
                        <!-- <p>Don't have an account? <a href="signup.php">Signup</a></p> -->
                        <br>
                        <button type="submit" class="block" name="login">Login</button>
                        <div class="link login-link" style="margin:10px 10px 0px 10px;">Not yet a member? <a
                                href="signup.php">Signup
                                now</a></div>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <div class="col-sm-3"></div>
    <?php include 'footer.php' ?>