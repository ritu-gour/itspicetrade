<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <!-- <meta name="description" content="We strive to provide a supportive environment where students can thrive academically and personally. Our dedicated faculty and staff are here to assist the students every step of the way.">
 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trade Guru Academy</title>
    <link rel="icon" type="image/x-icon" href="img/Trade_Guru_academy.png">
    <link rel="icon" type="image/x-icon" href="img/Trade_Guru_academy.png">



    <link rel="stylesheet" href="indexmobile.css">
    <style>
    .nav-item.dropdown.nav89 {
        margin: 0px 0px 10px 0px;
    }

    li.li90 {
        margin: 0px 0px 10px 0px;
    }

    .dropdown-menu.bg-transparent.border-4 {
        margin: -10px 0px 0px 0px;
        background: #1d64a9 !important;
        padding: 20px;
        border: none;
    }


    @media (max-width: 480px) {
        .mobilelogo {

            padding: 3px 0px 3px 0px;
            margin: 0px 95px 0px 0px !important;
        }

        .img-responsive2 {
            margin: 0px 0px 0px 90px !important;
        }


    }

    @media (max-width: 768px) {
        .mobilelogo {

            padding: 3px 0px 3px 0px;
            margin: 0px 0px 0px 0px !important;
        }



        .img-responsive2 {
            margin: 0px -620px 0px 300px;
        }

    }
    </style>
</head>



<body>



    <div class="desktop1 bg-light fixed-top shadow-lg">

        <header class="">



            <a href="" class="logo"><img src="img/Trade_Guru_academy.png" height="60px" width="80px"
                    class="mobilelogo"></a>

            <div class="img-responsive2">
                <img src="<?php echo $_SESSION['user_image' ] ?>" width="30px"
                    class="img-responsive img-circle img-thumbnail" />
                <?php echo $_SESSION['user_first_name']?>
                <?php echo $_SESSION['user_last_name']?>
            </div>
            <div class="group ">











                <ul class="navigation">


                    <nav class="navbar">

                        <div class="navbar-nav w-100">
                            <li class="li90"><a href="index.php" title="Home">Home</a></li>
                            <li class="li90"><a href="about.php" title="Home">About Us</a></li>
                            <li class="li90"><a href="portfolio.php" title="Home">Portfolio</a></li>
                            <li class="li90"><a href="courses.php" title="Home">Courses</a></li>
                            <li class="li90"><a href="faq.php" title="Home">FAQs</a></li>

                            <li class="li90"><a href="contactUs.php" title="Home">Contact us</a></li>
                            <li class="li90"><a href="dmat.php" title="Home">New DMAT Account
                                </a></li>
                            <li class="li90"><a href="Login.php" title="Home">Login</a></li>
                            <li class="li90"><a href="Signup.php" title="Home">Sign Up</a></li>


                            <li class="li90"><a href="Signup.php" title="Home">
                                    <img src="<?php echo $_SESSION['user_image' ] ?>" width="30px"
                                        class="img-responsive img-circle img-thumbnail" />
                                    <?php echo $_SESSION['user_first_name']?>
                                    <?php echo $_SESSION['user_last_name']?></a></li>
                            <li class="li90"><a href="Signup.php"
                                    title="Home"><?php echo $_SESSION['user_email_address']?></a></li>


                            <li class="li90"><a href="logout1.php"><i class="fa fa-power-off"></i>
                                    LogOut</a></li>








                        </div>
                    </nav>
















                </ul>

                <div class="search">

                    <span class="icon">

                        <ion-icon name="search-outline" id="searchBtn"></ion-icon>

                        <ion-icon name="close-outline" id="closeBtn"></ion-icon>

                    </span>

                    <ion-icon name="grid-outline" class="menuToggle"></ion-icon>

                </div>

            </div>

            <div class="searchBox" id="searchBoxBtn">

                <input type="text" name="" id="" placeholder="Search here...">

            </div>

        </header>



    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <!-- <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> -->

    <!-- js personalizado  -->



    <script src="indexmobile.js"></script>



</body>



</html>