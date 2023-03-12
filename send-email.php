<?php

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

$mail->Username = "wojewska.dominika@gmail.com";
$mail->Password = "St4rg4z3r_D10";

// pass in the values from the contact form
$mail->setFrom($email);
$mail->addAddress("groaning.witch@gmail.com"); //send to this address
$mail->Body = $message;

$mail->send(); //send it

echo "form submitted successfully";
?>