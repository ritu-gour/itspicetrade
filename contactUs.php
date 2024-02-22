<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';


?>
<?php 
error_reporting(0);
// $con = mysqli_connect('localhost', 'root', '', 'schooldata');
$con = mysqli_connect('localhost:3306', 'tradeguruacademy', 'uAzZ84HWLv@z8Ha', 'itspiceo_');
$email = "";
$msg1 = "";
$errors = array();


if(isset($_POST['submit_form'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $subjt = mysqli_real_escape_string($con, $_POST['subjt']);
    $msg = mysqli_real_escape_string($con, $_POST['msg']);
    

    
    if(count($errors) === 0){
        
       
        $insert_data = "INSERT INTO usercontact (name, email, subjt, msg)
                        values('$name','$email','$subjt','$msg')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            $subject = "Your message has been submitted successfully. Thank you for contacting us.";
            $message = "
            Name :- $name
            Email :- $email
            Subject :- $subjt
            Message :- $msg
            Your message has been submitted successfully. Thank you for contacting us. https://www.tradeguruacademy.net/

            ";
            $sender = "From:$email";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a Message to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
               
               
               
            }else{
                $errors['otp-error'] = "Failed while sending Data!";
            }
            
            $msg1 = "<div class='alert alert-success'> Your Form Successfully..</div>";
        }
        else{
            $errors['db-error'] = "Failed while inserting data into database!";
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
        background-image: linear-gradient(rgba(0, 0, 0, 0.652), rgba(0, 0, 0, 0.652)), url(img/contactus.webp);
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
        background: #1a2563;
        color: white;
        padding: 14px 17px 14px 17px;
        font-size: 25px;
        border-radius: 50%;
    }

    .icon2 {
        background: #1a2563;
        color: white;
        padding: 14px 15px 14px 15px;
        font-size: 25px;
        border-radius: 50%;
    }

    .icon3 {
        background: #1a2563;
        color: white;
        padding: 14px 15px 14px 15px;
        font-size: 25px;
        border-radius: 50%;
    }

    .cs {
        color: #1a2563;
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
        color: #1a2563;
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
    </style>
</head>

<body>
    <?php include 'header.php' ?>

    <section class="content-section1">

        <div class="container">
            <h2 class="text-center cc4">Contact Us</h2>
        </div>
    </section>





    <br><br>

    <div class="container my-5">

        <div class="row">

            <div class="col-sm-6">
                <div class="d-inline-flex">
                    <div class="p-2">
                        <i class="fas fa-map-marker-alt icon1" aria-hidden="true"></i>

                    </div>
                    <div class="p-2 ">
                        <h4 class="cs">Location</h4>
                        <p class="cd1"> C-49, Near Janta Market, Sector-4, Airoli, Navi Mumbai -400708
                        </p>
                    </div>

                </div><br>
                <div class="d-inline-flex">
                    <div class="p-2">
                        <i class="fa fa-envelope icon2" aria-hidden="true"></i>

                    </div>
                    <div class="p-2 ">
                        <h4 class="cs">Email</h4>
                        <p class="cd1">tradeguruteam1@gmail.com</p>
                    </div>

                </div><br>
                <div class="d-inline-flex">
                    <div class="p-2">

                        <i class="fas fa-phone-volume icon3" aria-hidden="true"></i>

                    </div>
                    <div class="p-2 ">
                        <h4 class="cs">Call</h4>
                        <a href="tel:7366953335" class="cd">8779961039
                        </a>

                    </div>

                </div><br><br>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.968017062086!2d72.99482307497935!3d19.152877232067638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bf527119ee4b%3A0x492127478d58d415!2sSector%204%2C%20Airoli%2C%20Navi%20Mumbai%2C%20Maharashtra%20400708!5e0!3m2!1sen!2sin!4v1705155052568!5m2!1sen!2sin"
                    class="map99" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div class="col-sm-6">
                <div class="card111">
                    <br><br>

                    <?php 
                    if(isset($_POST['submit_form']))
                    {
                        $email=$_POST['email'];
                        $subjt = $_POST['subjt'];
                        $msg=$_POST['msg'];
                        $name=$_POST['name'];

                        
                        $mail = new PHPMailer(true);
                        try {
                            // $mail->SMTPDebug = 2; 
                            $mail->isSMTP();
                            $mail->Host       = 'smtp.gmail.com';
                            $mail->SMTPAuth   = true;            
                            $mail->Username   = 'gourritu48@gmail.com';
                            $mail->Password   = 'cifn fqie dmev gzdh';
                            $mail->SMTPSecure = 'tls';
                            $mail->Port       = 587;
                            $mail->setFrom('gourritu48@gmail.com',$email,'Trade Guru');
                            $mail->addAddress($email,'Trade Guru');
                            $mail->isHTML(true);
                            $mail->Subject = $subjt;
                            $mail->Body    = "
                            Name :- $name<br>
                            Email :- $email<br>
                            Subject :- $subjt<br>
                            Message :- $msg 
                            ";
                           
                            $mail->send();
                            echo '<script type="text/javascript">';
                                echo 'alert("Your message has been submitted successfully. Thank you for contacting us.");';
                                echo 'window.location = "contactUs.php";';
                                echo '</script>';

                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }
                        
                    }
                    ?>
                    <h3 class="text-center bbb">Send Us a Message</h3>
                    <form action="#" method="POST">
                        <!-- <?php echo $msg1; ?> -->
                        <div class="mb-4">

                            <input type="text" name="name" class="form-control control11" placeholder="Your Name"
                                required>

                        </div>
                        <div class="mb-4">

                            <input type="email" name="email" class="form-control control11" placeholder="Your Email"
                                required>

                        </div>
                        <div class="mb-4">

                            <input type="text" name="subjt" class="form-control control11" placeholder="Subject"
                                required>

                        </div>
                        <div class="mb-4">

                            <textarea name="msg" id="" cols="30" rows="5" class="form-control control11"
                                placeholder="Message"></textarea>

                        </div>

                        <br>
                        <button type="submit" class="block" name="submit_form">Send Message</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

    <?php include 'footer.php' ?>