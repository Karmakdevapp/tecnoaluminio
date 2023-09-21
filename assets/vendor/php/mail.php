<?php
$path = __DIR__ ;

require $path .'/PHPMailer.php';
require $path .'/SMTP.php';
require $path .'/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/* $smtpUsername = 'consultas@tecnoaluminio.com.uy'; // Tu dirección de correo de Gmail
$smtpPassword = 'T9(vV]pKgk0v'; // Tu contraseña de Gmail
$emailFrom = 'consultas@tecnoaluminio.com.uy'; // Tu dirección de correo de Gmail
$emailFromName = 'Consultas Web';
$emailTo = 'gastoncodes@gmail.com'; // Correo del destinatario
$emailToName = 'Gaston';
$smtpHost = 'mail.tecnoaluminio.com.uy';
$smtpPort = 465; */

$smtpUsername = 'tecnoaluminiowebmail@gmail.com'; // Tu dirección de correo de Gmail
$smtpPassword = 'dnwrvoddlbqrwlny'; // Tu contraseña de Gmail
$emailFrom = $_POST['email']; // Tu dirección de correo de Gmail
$emailFromName = $_POST['name'];
$emailTo = 'gastoncodes@gmail.com'; // Correo del destinatario
$emailToName = 'Gaston'; 
$smtpHost = 'smtp.gmail.com';
$smtpPort = 587;
$subject = $_POST['subject'];
$message = $_POST['message'];

echo $emailFrom, $emailFromName   ;
  $mail = new PHPMailer;
  $mail->isSMTP(); 
  $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
  $mail->Host = $smtpHost; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
  $mail->Port = $smtpPort; // TLS only
  $mail->SMTPSecure = 'tls'; // ssl is depracated
  $mail->SMTPAuth = true;
  $mail->Username = $smtpUsername;
  $mail->Password = $smtpPassword;
  $mail->setFrom($emailFrom, $emailFromName);
  $mail->addAddress($emailTo, $emailToName);
  $mail->Subject = $_POST['subject'];
  $mail->msgHTML($_POST['message']); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
  $mail->AltBody = 'HTML messaging not supported';
  
  
  if(!$mail->send()){
      echo "Mailer Error: " . $mail->ErrorInfo;
  }else{
      echo "Message sent!";
  }
    

    ?>
