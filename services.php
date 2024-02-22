<?php
/*12635*/



/*12635*/



 

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
    <title>Nippy Tech</title>
    <link rel="icon" type="image/x-icon" href="nippylogo.png">
    <link rel="icon" type="image/x-icon" href="image/apna_school_icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="indexheader.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .content-section1 {
        background-image: linear-gradient(rgba(0, 0, 0, 0.652), rgba(0, 0, 0, 0.652)), url(nippyimage/bg6-672x448.jpg);

        background-size: cover;
        background-position: center;
        color: #fff;
        background-size: cover;
        background-attachment: fixed;

        padding: 150px 0px 200px 0px;


    }

    .content-section9 {
        background-image: linear-gradient(rgba(0, 0, 0, 0.652), rgba(0, 0, 0, 0.652)), url(nippyimage/about.png);

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

    .img-fluid {
        width: 150px !important;


    }

    .img-fluid7 {
        width: 80px !important;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .img-fluid1 {
        height: 280px;
    }

    .grid-item {

        padding: 40px 20px 30px 20px;
    }

    .grid-item9 {

        border: 2px solid #055194;
        height: 300px;
        padding: 40px 10px 0px 10px;
    }

    .grid-item9:hover {

        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        padding: 40px 10px 20px 10px;
    }

    .caption3 {
        font-size: 18px;
        margin: 20px 0px 9px 0px;
    }

    .grid-item1 {
        height: 500px !important;

    }

    .grid-item1:hover {
        height: 500px;
        border-bottom: 4px solid #055194 !important;
    }

    .bb7 {
        font-size: 17px;
    }


    .bb6 {
        font-size: 25px;
        color: #055194;
    }






    /* 
.main {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 95vh;
} */

    .carousel {
        --color-default-state: #ddd;
        --color-active-state: #1bb9ed;
        position: relative;
        width: 100%;
        height: 720px;
    }

    .carousel_track-container {
        overflow: hidden;
        width: 100%;
        height: 100%;
    }

    .carousel_track {
        position: relative;
        width: inherit;
        height: inherit;
        margin: 130px 0px 0px 0px;
        padding: 0;
        list-style: none;

    }

    .carousel_slide,
    .carousel_image {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: 0;
        padding: 0;
    }

    .carousel_slide {
        padding: 5% 12% 8%;
        text-align: center;
        transform: translateX(-100%);
        transition: transform .3s ease-out;
    }

    .carousel_slide.is-selected {
        transform: translateX(0);
    }

    .carousel_slide.is-selected~.carousel_slide {
        transform: translateX(100%);
    }

    .carousel_image {
        z-index: -1;
    }

    .carousel_image>img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        border: none;
    }

    .carousel_title {
        font-size: 40px;
        color: #fff;
    }

    .carousel_btn,
    .carousel_dot {
        z-index: 1;
        padding: 0;
        cursor: pointer;
        border: none;
        color: white;

    }

    .carousel_dot {
        display: none;
    }

    .carousel_btn {
        position: absolute;
        top: 50%;
        padding: 10px 10px 10px 10px;
        background-color: #fff0;
        transform: translateY(-50%);
        border-radius: 50px;

    }

    .carousel_btn:focus,
    .carousel_dot:focus,
    .carousel_btn:active,
    .carousel_dot:active {
        outline: none;
    }

    .carousel_btn>* {
        pointer-events: none;
    }

    .carousel_btn svg {
        fill: var(--color-default-state);
        transform-origin: center;
        transition: fill .2s;
        width: 40px;

    }

    .carousel_btn:hover svg {
        fill: var(--color-active-state);
    }

    .jsPrev {
        left: 10px;
    }

    .jsNext {
        right: 10px;
    }

    .jsPrev svg {
        transform: rotate(-90deg);
    }

    .jsNext svg {
        transform: rotate(90deg);
    }

    .carousel_nav {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);

    }

    .carousel_dot {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: var(--color-default-state);
        transition: background-color .2s;
    }

    .carousel_dot+.carousel_dot {
        margin-left: 20px;
    }

    .carousel_dot.is-selected {
        background-color: var(--color-active-state);
    }

    .slideh {
        font-size: 50px;
        font-family: "Merriweather", serif;
        font-weight: 800;
    }

    .slidep {
        font-size: 22px;
        font-family: "Merriweather", serif;
        font-weight: 600;
    }

    .slide_buttons {
        left: 0;
        position: absolute;
        right: 0;
        text-align: center;
        margin-top: -192px;
        color: #fff;
        background-color: rgba(33, 71, 109, 0.7);
        padding: 40px;

    }

    .v {
        width: 550px;
        border-radius: 20px;
        border: 6px solid #c9a34e;
        height: 500px;
    }

    .tought1 {
        font-style: italic;
        text-align: center;
        color: black;
        font-size: 18px;
        margin-top: 30px;


    }

    .j1 {
        font-size: 40px;
        margin: 50px 0px 10px 0px;
    }

    .j2 {
        color: #c9a34e;
    }

    .j3 {
        font-size: 17px;
        text-align: justify;
        margin: 20px 0px 0px 0px;
    }

    .cc {
        font-size: 18px;
        padding: 10px 130px 0px 130px;
    }

    .cc1 {
        color: #07d5fb;
        font-size: 50px;
    }

    .bnm {
        margin-top: 80px;
    }

    .weare1 {
        font-size: 70px;
        text-align: center;
        margin: 70px 0px 0px 0px;
    }

    .weare {
        font-size: 20px;
        text-align: center;
        margin: 180px 0px 0px 0px;
    }

    @media (max-width: 480px) {
        .v {
            width: 340px !important;
            border-radius: 20px;
            border: 6px solid #c9a34e;
            height: 300px !important;
        }

        .carousel {
            --color-default-state: #ddd;
            --color-active-state: #1bb9ed;
            position: relative;
            width: 100%;
            height: 600px !important;
            margin-top: -60px !important;

        }

        .slideh {
            font-size: 30px;
            font-family: "Merriweather", serif;
            font-weight: 800;
            /* margin: 0px -20px 0px -20px; */
        }

        .slidep {
            font-size: 19px;
            font-family: "Merriweather", serif;
            font-weight: 600;
            /* margin: 0px -20px 0px -20px; */
        }

        .slide_buttons {
            left: 0;
            position: absolute;
            right: 0;
            text-align: center;
            margin-top: -192px;
            color: #fff;
            background-color: rgba(33, 71, 109, 0.7);
            padding: 20px;

        }

        .grid-item1 {
            height: 600px !important;
        }

        .grid-item1:hover {
            height: 600px;
        }

        .carousel_track-container {
            overflow: hidden;
            width: 100%;
            height: 70%;

        }

        .slide_buttons {
            left: 0;
            position: absolute;
            right: 0;
            text-align: center;
            margin-top: 0px;
            color: #fff;
            background-color: #2067af;
            padding: 30px;

        }

        .campus-section {
            padding: 50px 0;
            margin: 280px 0px 0px 0px !important;
        }

        button.btn.btn-lg {
            margin: 0px 0px 0px 40px !important;
        }

        .box1 {
            position: absolute;
            top: 50% !important;
            left: 50% !important;
            transform: translate(-50%, -50%);
            width: 340px !important;
            height: 400px !important;
            margin: 200px 0px 0px 0px !important;
            background: white;
            box-sizing: border-box;
            overflow: hidden;
            box-shadow: 0 20px 50px rgb(23, 32, 90);
            border: 6px solid #2a3cad;
            /* color: white; */
            padding: 20px;
            background-size: cover;
            background-position: center;
            color: #fff;
            background-size: cover;
            background-image: url('nippyimage/feature.jpg');
        }

        .box1 .content1 {
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            border: 3px solid #f0a591;
            padding: 20px;
            text-align: center;
            box-shadow: 0 5px 10px rgba(9, 0, 0, 0.5);
            background: white;
            color: black;
            margin: 0px !important;

        }

        .weare1 {
            font-size: 50px !important;
            text-align: center;
            margin: 70px 0px 0px 0px;
        }
    }

    @media (max-width: 768px) {
        .campus-section {
            padding: 50px 0;
            margin: 20px 0px 0px 0px !important;
        }

        /* button.btn.btn-lg {
    margin: 0px 0px 0px 40px !important;
} */

        .box1 {
            position: absolute;
            top: 50% !important;
            left: 50% !important;
            transform: translate(-50%, -50%);
            width: 340px !important;
            height: 400px !important;
            margin: 200px 0px 0px 0px !important;
            background: white;
            box-sizing: border-box;
            overflow: hidden;
            box-shadow: 0 20px 50px rgb(23, 32, 90);
            border: 6px solid #2a3cad;
            /* color: white; */
            padding: 20px;
            background-size: cover;
            background-position: center;
            color: #fff;
            background-size: cover;
            background-image: url('nippyimage/Apnaschool_03.jpg');
        }

        .box1 .content1 {
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            border: 3px solid #f0a591;
            padding: 20px;
            text-align: center;
            box-shadow: 0 5px 10px rgba(9, 0, 0, 0.5);
            background: white;
            color: black;
            margin: 0px !important;

        }

        .carousel {
            --color-default-state: #ddd;
            --color-active-state: #1bb9ed;
            position: relative;
            width: 100%;
            height: 600px !important;
            margin-top: -60px !important;

        }

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

    .card67 {
        background-size: cover;
        background-position: center;
        color: #fff;
        background-size: cover;
        background-image: url('nippyimage/Video_Image2.jpeg');

        padding: 30px 30px 30px 30px;
    }

    .bodytt {
        background: white;
        border-radius: 20px;
        border-radius: 20px;
        border: 6px solid #c9a34e;
        padding: 40px 30px 200px 30px !important;
    }

    .bh6 {
        color: #2067af;
        font-size: 30px;
        font-family: "Merriweather", serif;
        font-weight: 600;
        margin: 0px 0px 20px 0px !important;
    }

    .bj6 {
        font-size: 17px;
        font-family: "Merriweather", serif;
        font-weight: 600;
    }

    * {
        margin: 0;
        padding: 0;
    }




    /* h2{ font-size:20px;color:black;} */

    .box1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 500px;
        height: 500px;
        background: white;
        box-sizing: border-box;
        overflow: hidden;
        box-shadow: 0 20px 50px rgb(23, 32, 90);
        border: 6px solid #2a3cad;
        /* color: white; */
        padding: 20px;
        background-size: cover;
        background-position: center;
        color: #fff;
        background-size: cover;
        background-image: url('nippyimage/about3.jpg');
    }

    .box1:before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.1);
        transition: 0.5s;
        pointer-events: none;
    }

    .box1:hover:before {
        left: -50%;
        transform: skewX(-5deg);
    }


    .box1 .content1 {
        position: absolute;
        top: 15px;
        left: 15px;
        right: 15px;
        bottom: 15px;
        border: 3px solid #f0a591;
        padding: 20px;
        text-align: center;
        box-shadow: 0 5px 10px rgba(9, 0, 0, 0.5);
        background: white;
        color: black;
        margin: 40px;

    }

    .box1 .span65 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: block;
        box-sizing: border-box;

    }

    .box1 .span65:nth-child(1) {
        transform: rotate(0deg);
    }

    .box1 .span65:nth-child(2) {
        transform: rotate(90deg);
    }

    .box1 .span65:nth-child(3) {
        transform: rotate(180deg);
    }

    .box1 .span65:nth-child(4) {
        transform: rotate(270deg);
    }

    .box1 .span65:before {
        content: '';
        position: absolute;
        width: 100%;
        height: 6px;
        background: #50dfdb;
        animation: animate 4s linear infinite;
    }

    @keyframes animate {
        0% {
            transform: scaleX(0);
            transform-origin: left;
        }

        50% {
            transform: scaleX(1);
            transform-origin: left;
        }

        50.1% {
            transform: scaleX(1);
            transform-origin: right;

        }

        100% {
            transform: scaleX(0);
            transform-origin: right;

        }


    }

    .btn88 {
        color: black;
        font-size: 20px;
        text-decoration: none;

    }

    .pavan {
        background-color: red !important;
        border: none !important;
        width: 200px;
    }

    .pavan:hover {
        background-color: blue !important;
        border: none !important;
        width: 200px;
    }


    .btn88:hover {
        color: white;
        font-size: 20px;
        text-decoration: none;
    }

    /*---------------------------*/
    .p17 {
        Font-size: 16px;
        text-align: center;
        margin: 30px 0px 0px 0px;
    }

    .nippy1 {
        font-size: 40px;
        color: #055194;
        margin: 90px 0px 0px 0px;

    }

    .fludi {
        width: 100%;
        height: 600px;
    }
    </style>
</head>

<body>

    <?php include 'header.php'?>



    <main class="content-section9">

        <h2 class="weare1">Services</h2>


    </main>

    <br><br>
    <div class="container bnm">
        <div class="row">

            <div class="col-sm-6 my-5">
                <h1 class="nippy1 mb-3">YOUR RELIABLE SEO</h1>
                <h4>
                    Nippy Technology Your Trusted SEO Company In kota Rajasthan For Digital Success
                </h4>
                <p class="j3">
                    Our team of experts works tirelessly to ensure your website secures a prominent position on the
                    coveted first page of Google. Nippy Technology , based Nippy Technology , is here to empower your
                    business
                    with unparalleled digital success.

                    Join us, and together, we'll elevate your online presence and ensure you shine brightly in the
                    digital realm. As the go-to SEO Agency , we're committed to your growth and success in the
                    ever-evolving online landscape.</p>

                <button type="button" class="btn btn-lg my-5 btn90" style="background:#2066ae;color:white;">
                    <a href="contactUs.php" style="color:white;text-decoration:none;">Contact
                        Us</a>

                </button>
                <br>

            </div>
            <div class="col-sm-1">

            </div>
            <div class="col-sm-5 my-4">

                <img src="nippyimage/image-02_webp.webp" class="fludi" />
            </div>
        </div>

    </div>
    <br><br>
    <section class="campus-section ">
        <div class="container">

            <div class="row">
                <!-- Add campus pictures with descriptions -->
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="3000">
                    <div class="grid-item9">
                        <img src="nippyimage/Enterprise_Mobility.jpg" alt="Campus Image 1" class="img-fluid7" style="">
                        <div class="caption3 text-center">
                            <h3 class="caption3">
                                Enterprise Mobility
                            </h3>
                            <p class="p1">Harness the power of a mobile-first journey with industry-specific
                                solutions
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="3000">
                    <div class="grid-item9">
                        <img src="nippyimage/Web-Development.png" alt="Campus Image 1" class="img-fluid7" style="">
                        <div class="caption3 text-center">
                            <h3 class="caption3">Web Development</h3>
                            <p class="p1">Design & develop – robust, scalable & industry specific products /
                                solutions
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="3000">
                    <div class="grid-item9">
                        <img src="nippyimage/Cloud-Computing.png" alt="Campus Image 2" class="img-fluid7">
                        <div class="caption3 text-center">
                            <h3 class="caption3">Cloud Computing</h3>
                            <p class="p1 ">Drive innovation & lower the costs with agile & scalable cloud
                                solutions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="2000">
                    <div class="grid-item9">
                        <img src="nippyimage/AI-ML.png" alt="Campus Image 3" class="img-fluid7" />
                        <div class="caption3 text-center">
                            <h3 class="caption3">AI & ML</h3>
                            <p class="p1">Building and fueling intelligent businesses


                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <!-- Add campus pictures with descriptions -->
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="3000">
                    <div class="grid-item9">
                        <img src="nippyimage/UX-UI-Design.png" alt="Campus Image 1" class="img-fluid7" style="">
                        <div class="caption3 text-center">
                            <h3 class="caption3">
                                UX / UI Design
                            </h3>
                            <p class="p1">Adding life to Software by creating meaningful UX / UI Design
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="3000">
                    <div class="grid-item9">
                        <img src="nippyimage/Data-Science.png" alt="Campus Image 1" class="img-fluid7" style="">
                        <div class="caption3 text-center">
                            <h3 class="caption3">Data Science</h3>
                            <p class="p1">Extract value from data that matters
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="3000">
                    <div class="grid-item9">
                        <img src="nippyimage/Internet-of-Things.png" alt="Campus Image 2" class="img-fluid7">
                        <div class="caption3 text-center">
                            <h3 class="caption3">Internet of Things</h3>
                            <p class="p1 ">Leverage sensor technology through integration with business
                                applications
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="2000">
                    <div class="grid-item9">
                        <img src="nippyimage/Blockchain.png" alt="Campus Image 3" class="img-fluid7" />
                        <div class="caption3 text-center">
                            <h3 class="caption3">Blockchain</h3>
                            </h3>
                            <p class="p1">Deciphering blockchain and building sustainable and robust custom
                                solutions


                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <script>
    AOS.init();
    </script>

    <?php include 'footer.php' ?>