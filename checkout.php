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
    .fludi {
        width: 100%;
        height: 100% !important;
        margin-top: 0px;

    }

    .des {
        padding: 50px 300px 50px 10px;
    }

    .card78check {
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        padding: 30px 20px 30px 20px;
        border: none;
        border-radius: 0px;
    }


    .bnm {
        margin-top: 80px;
    }

    span.price {
        float: right;
        color: black;
        font-size: 18px;

    }

    a {
        text-decoration: none;
    }

    a:hover {
        text-decoration: none;
    }

    .j3 {
        padding: 10px 0px 0px 0px;
    }

    .price1 {
        color: red !important;
    }

    .btn900 {
        font-size: 20px !important;

        background: #1a2563 !important;
        color: white !important;
        padding: 8px 30px 8px 30px !important;
    }

    .btn900:hover {
        font-size: 20px !important;
        background: #ef632f !important;
        color: white !important;
        padding: 8px 30px 8px 30px !important;
    }

    @media (max-width: 480px) {


        .des {
            padding: 50px 10px 50px 20px !important;
        }

        .fludi {
            width: 100%;
            height: 400px;
            height: 100% !important;

        }

        .col-sm-6 {
            flex: 0 0 auto;
            width: 100% !important;
        }

        .card78check {

            margin: 30px 0px 0px 0px !important;

        }
    }

    @media (max-width: 768px) {


        .des {
            padding: 50px 10px 50px 20px !important;
        }

        .col-sm-6 {
            flex: 0 0 auto;
            width: 50%;
        }

        .fludi {
            width: 100%;
            height: 300px !important;


        }
    }

    .product {
        font-size: 17px;
        font-weight: 600;
        color: #00356b;
        padding: 0px 0px 20px 0px;
    }
    </style>
</head>

<body>
    <div class="container bnm">
        <?php include("comm/connection.php"); 
                    $id=$_GET['upd1'];        
                    $query = "SELECT * FROM courses WHERE id='$id'";
                    $fire = mysqli_query($con, $query);
                    if (mysqli_num_rows($fire) > 0) {                        
                    while ($data = mysqli_fetch_array($fire)) {
                      ?>
        <div class="row">
            <div class="col-sm-6 ">
                <?php echo '<img class="fludi" src="data:image/jpeg;base64,' . base64_encode($data['image']) . '"/>' ?>
            </div>
            <div class="col-sm-6 ">
                <div class="card card78check">
                    <p class="product">Product Name <span class="price"><?php echo $data['name']?></span></p>
                    <p class="product">Product Price <span class="price">₹<?php echo $data['price']?></span></p>
                    <p class="product">TXT Price <span class="price price1">- 88</span></p>
                    <p class="product1" style="color:#1a2563;font-weight:600;font-size:17px;">Coupons</p>
                    <select class="form-select form-control" aria-label="Default select example">
                        <option selected>Select option</option>
                        <option value="Coupons">Coupons 1</option>
                        <option value="opel">Coupons 2</option>
                        <option value="audi">Coupons 3</option>
                    </select>
                    <hr>
                    <p class="product"> Total <span class="price">
                            ₹<?php echo $data['price']?>
                        </span></p>

                    <button type="button" class="btn btn-lg  btn900" style="background:#2066ae;color:white;">
                        <a href="#" style="color:white;text-decoration:none;">Proceed to Pay</a>

                    </button>

                </div>








            </div>
            <div class="des">
                <h3 style="color:#1a2563;"> Description</h3>
                <p class=" j3">
                    <?php echo $data['descipt']?></p>


                </p>
            </div>
        </div>
        <?php
        }
    }
        ?>
    </div>

    <script>
    AOS.init();
    </script>


    <?php include 'footer.php' ?>