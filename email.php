<?php
// $receiver = "gourritu48@gmail.com";
// $subject = "Email Test via PHP using Localhost";
// $body = "Hi, there... This is a test email send from Localhost."; 
// $sender = "From:gourritu48@gmail.com";
// //php function to send mail
// if(mail($receiver, $subject, $body, $sender)){
//   echo "Email sent successfully to $receiver";

// }else{

// echo "Sorry, failed while sending mail!";


// }
// cifn fqie dmev gzdh
?><?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
try {
    // $mail->SMTPDebug = 2; 
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;            
    $mail->Username   = 'ritu@dotuptech.com';
    $mail->Password   = 'kgxl rana rqvn orbq';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->setFrom('ritu@dotuptech.com', 'Apna School');
    $mail->addAddress('ritu@dotuptech.com');
    $mail->isHTML(true);
    $mail->Subject = 'Subject';
    $mail->Body    = 'HTML message body in <b>bold</b>!';
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    $mail->send();
    echo "Mail has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}