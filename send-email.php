<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$email = $_POST["email"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true); //create a mailer class
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

// access my stp server 
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "domi@mokosh.dev";
$mail->Password = "M0k0shd0td3v";

// pass in the values from the contact form
$mail->setFrom($email);
$mail->addAddress("groaning.witch@gmail.com"); //send to this address
$mail->Body = $message;

$mail->send(); //send it

echo "form submitted successfully";
?>