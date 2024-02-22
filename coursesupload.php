<?php

    include("comm/connection.php");
    if(isset($_POST['upload'])){
        $name =$_POST['name'];
        $price =$_POST['price'];
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $descipt =$_POST['descipt'];
        
        $sql = "INSERT INTO courses(name, price,image,descipt) VALUES('$name','$price','$image','$descipt')";
                $result = mysqli_query($con, $sql) or die("con not insert the data.".mysqli_error($con));
                if($result){
                   
                }
            
        }
        
    
?>
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

/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

/* Firefox */
input[type=number] {
    -moz-appearance: textfield;
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
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
                <div class="card111">


                    <h3 class="text-center bbb">
                        Courses Upload
                    </h3>
                    <form action="#" method="POST" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-sm-6 mb-3 ">
                                <label for="exampleFormControlInput1" class="form-label">Courses Name</label>
                                <input class="form-control control11" type="text" name="name" placeholder="Courses Name"
                                    required>

                            </div>

                            <div class="col-sm-6 mb-3 ">
                                <label for="exampleFormControlInput1" class="form-label">Price</label>
                                <input class="form-control controll11" type="number" name="price" placeholder="Price"
                                    required>

                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="form-label">Courses Image</label>
                            <input class="form-control control11" type="file" name="image" placeholder="price Address"
                                required>

                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="form-label"> Description</label>

                            <textarea class="form-control" id="exampleFormControlTextarea1" name="descipt"
                                rows="3"></textarea>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" class="block" name="upload">Upload</button>
                            </div>
                            <div class="col-sm-6">
                                <button type="reset" id="btn" class="block" name="reset" value="Cancel"
                                    onclick="myFunction()">Cancel</button>
                            </div>


                        </div>
                    </form>
                </div>
            </div>

            <div class="col-sm-3">
            </div>
        </div>
    </div>
    <script type="text/javascript">
    function myFunction() {
        alert("Registration Cancelled!");
    }
    </script>
    <?php include 'footer.php' ?>