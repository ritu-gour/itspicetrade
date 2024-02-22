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
    <link rel="stylesheet" href="about.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .content-section1 {
        background-image: linear-gradient(rgba(0, 0, 0, 0.652), rgba(0, 0, 0, 0.652)), url(img/About_banners.jpg);

        background-size: cover;
        background-position: center;
        color: #fff;
        background-size: cover;
        background-attachment: fixed;

        padding: 150px 0px 200px 0px;


    }

    .content-section9 {
        background-image: linear-gradient(rgba(0, 0, 0, 0.652), rgba(0, 0, 0, 0.652)), url(img/About_banners.jpg);

        background-size: cover;
        background-position: center;
        color: #fff;
        background-size: cover;
        background-attachment: fixed;

        padding: 150px 0px 160px 0px;


    }

    .abnner567 {
        background-color: #f2f3f6;


        padding: 150px 0px 160px 0px;
    }



    .weare1 {
        font-size: 70px;
        text-align: center;
        margin: 70px 0px 0px 0px;
    }

    .img-fluid1 {
        height: 250px;
        margin: 0px 0px 20px 0px;
    }

    .weare {
        font-size: 20px;
        text-align: center;
        margin: 180px 0px 0px 0px;
    }



    .buynow {
        color: white !important;
        border: none;
        background-color: #00263B !important;
        padding: 9px 60px 9px 60px !important;
    }

    .buynow:hover {
        color: white !important;
        border: none;
        background: #f75d25 !important;
        padding: 9px 60px 9px 60px !important;
    }

    .grid-item13 {
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        height: 500px;
    }



    @media (max-width: 480px) {
        .v {
            width: 340px !important;
            border-radius: 20px;
            border: 6px solid #c9a34e;
            height: 300px !important;
        }

        /* .container.bnm {
            margin: -100px 10px 0px 10px !important;
            padding: 0px !important;
        } */



    }

    @media (max-width: 768px) {
        .campus-section {
            padding: 50px 0;
            margin: 20px 0px 0px 0px !important;
        }

        /* button.btn.btn-lg {
    margin: 0px 0px 0px 40px !important;
} */



        .col-sm-6 {
            flex: 0 0 auto;
            width: 100% !important;
        }

        .grid-item1 {
            height: 600px !important;
        }

        .grid-item1:hover {
            height: 600px;
        }
    }

    .whowe {
        color: #1a2563 !important;
        font-weight: 600;
        font-size: 40px;
        text-align: center;
    }

    .title12 {
        font-size: 20px;
        color: #00263B;
        text-align: center !important;
    }

    .title12:hover {
        font-size: 20px;
        color: #ee6430;
        text-align: center !important;
    }



    .price1 {
        font-size: 25px;
        color: #00263B;
        text-align: center;
    }

    .price12 {
        font-size: 20px;
        color: #ee6430;
        text-align: center;
    }

    .price12:hover {
        font-size: 20px;
        color: #ef632f !important;
        text-align: center;
    }

    .btnregi {
        font-size: 20px !important;
        background: #ef632f !important;
        color: white !important;
        padding: 8px 30px 8px 30px !important;
    }

    .btnregi:hover {
        font-size: 20px !important;
        background: #1a2563 !important;
        color: white !important;
        padding: 8px 30px 8px 30px !important;
    }
    </style>
</head>

<body>

    <?php include 'header.php'?>



    <main class="content-section9">

        <h2 class="weare1">Course</h2>


    </main>

    <br>

    <br>



    <section class="student-life-section">
        <div class="container">
            <h1 class="whowe">Check Our Services
            </h1>

            <div class="row my-5">
                <?php
                              include("comm/connection.php");            
                                      $query = "SELECT * FROM courses";
                                      
                                      
                                      
                                      $rs_result = mysqli_query($con, $query) or die("con not insert the data.".mysqli_error($con));
                                      if (mysqli_num_rows($rs_result) > 0) {

                                      while ($data = mysqli_fetch_assoc($rs_result)){
                  
                                      ?>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="grid-item13">
                        <?php echo '<img class="img-fluid1" src="data:image/jpeg;base64,' . base64_encode($data['image']) . '"/>' ?>

                        <div class="caption">
                            <h3 class="title12"><?php echo $data['name']?></h3>
                            <p class="price1">₹<?php echo $data['price']?></p>
                            <p class="price12"><a href="courses_detail.php?upd=<?php echo $data['id']?>"
                                    class="price12">More
                                    Detail

                                </a></p>
                            <div class="d-flex justify-content-between ">
                                <div class="p-2 "></div>
                                <div class="p-2 ">

                                    <a href="checkout.php?upd1=<?php echo $data['id']?>"
                                        style="color:white;text-decoration:none;" class="btn btn- buynow">Buy
                                        Now</a>
                                </div>
                                <div class="p-2 "></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                                      
                                    }
                                }
                                    ?>

            </div>
        </div>
    </section>




    <script>
    AOS.init();
    </script>



    <?php include 'footer.php' ?>