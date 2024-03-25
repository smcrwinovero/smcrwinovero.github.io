<?php

$name = $_POST["your-first-name"];
$email = $_POST["your-email_1"];
$message = $_POST["your-message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPmailer();
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->isSMTP();

$mail->SMTPAuth = true;
$mail->Host = "sandbox.smtp.mailtrap.io";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "9f2c4cec7f2579";
$mail->Password = "dea4d469c5e7b9";

$mail->setFrom($email, $name);
$mail->addAddress("demomailtrap.com","test");

$mail->Subject = "Testing";
$mail->Body = $message;

$mail->send();

echo "Email Sent";

?>