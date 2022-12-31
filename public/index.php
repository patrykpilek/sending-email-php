<?php

/**
 * PHPMailer Autoloader
 */
require '../vendor/autoload.php';
require '../classes/Config.php';

use PHPMailer\PHPMailer\PHPMailer;

/**
 * Configure PHPMailer with your SMTP server settings
 */
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = Config::SMTP_HOST;
$mail->Port = Config::SMTP_PORT;
$mail->SMTPAuth = true;
$mail->Username = Config::SMTP_USER;
$mail->Password = Config::SMTP_PASSWORD;
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

