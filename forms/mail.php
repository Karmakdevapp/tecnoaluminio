<?php
use assets\vendor\PHPMailer\PHPMailer;
use assets\vendor\PHPMailer\Exception;

require 'assets\vendor\PHPMailer';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'http://mail.tecnoaluminio.com.uy';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = ' consultas@tecnoaluminio.com.uy';                 // SMTP username
    $mail->Password = 'T9(vV]pKgk0v';                           // SMTP password
    $mail->SMTPSecure = 'STARTTLS';                           
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@example.net');
    $mail->addAddress($_POST['mail']);     // Add a recipient



    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];

    $mail->send();
    header('Location: https://www.tecnoaluminio.com.uy/forms/contact.php');
    exit();
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>