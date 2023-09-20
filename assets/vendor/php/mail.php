<?php
use PHPMailer\PHPMailer;
use PHPMailer\Exception;

require './PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.tecnoaluminio.com.uy';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = ' consultas@tecnoaluminio.com.uy';                 // SMTP username
    $mail->Password = 'T9(vV]pKgk0v';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                           
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('consultas@tecnoaluminio.com.uy', 'Consultas Tecnoaluminio');
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