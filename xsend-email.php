<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "vendor/autoload.php";

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$email = $_POST["email"];
$message = $_POST["message"];

$mail = new PHPMailer(true); //create a mailer class

// try {
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->Mailer = "smtp";
$mail->SMTPAuth = true;

// access my smtp server 

$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 587;

$mail->Host = "smtp.gmail.com";
$mail->Username = "domi@mokosh.dev";
$mail->Password = "M0k0shd0td3v";

// pass in the values from the contact form
$mail->IsHTML(true);
$mail->setFrom($email);
$mail->addAddress("groaning.witch@gmail.com"); //send to this address
$mail->isHTML(true); 
$mail->Body = $message;

$mail->send(); //send it

// echo "form submitted successfully";
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
}