<?php

/**
 * Include external classes
 */
require '../vendor/autoload.php';
require '../classes/Config.php';

use PHPMailer\PHPMailer\PHPMailer;

/**
 * Configure PHPMailer
 */
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = Config::SMTP_HOST;
$mail->Port = Config::SMTP_PORT;
$mail->SMTPAuth = true;
$mail->Username = Config::SMTP_USER;
$mail->Password = Config::SMTP_PASSWORD;
$mail->SMTPSecure = 'tls';
$mail->CharSet = 'UTF-8';
$mail->isHTML(true);


/**
 * Send an email
 */
$mail->setFrom('sender@example.com');
$mail->addAddress('patryk.pilek@gmail.com');

$mail->Subject = 'An email sent from PHP';
$mail->Body = '<h1 style="font-style: italic;">Hello</h1>'
             . "\n"
             . '<p style="color: #f00;">This is an email with some <span style="color: #0f0">CSS styles</span>.</p>';

$mail->AltBody = "Hello.\nThis is the body in plain text for non-HTML mail clients";

if ($mail->send()) {
	echo 'Message sent!';
} else {
    echo 'Mailer error: ' . $mail->ErrorInfo;
}
