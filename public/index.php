<?php

/**
 * PHPMailer Autoloader
 */
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

/**
 * Configure PHPMailer with your SMTP server settings
 */
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'mail.example.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'sender@example.com';
$mail->Password = 'secret';
$mail->SMTPSecure = 'tls';

/**
 * Enable SMTP debug messages
 */
$mail->SMTPDebug = 2;

/**
 * Send an email
 */
$mail->setFrom('sender@example.com');
$mail->addAddress('recipient@example.com');
$mail->Body = 'This is a test message';

if ($mail->send()) {
    echo 'Message sent!';
} else {
    echo 'Mailer error: ' . $mail->ErrorInfo;
}

