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

/**
 * Send an email
 */
$mail->setFrom('sender@example.com');
$mail->addAddress('patryk.pilek@gmail.com');

$mail->Subject = 'An email sent from PHP';
$mail->Body = 'Please find a file attached.';

$mail->addAttachment(dirname(__FILE__) . '/example.pdf', 'sample.pdf');

if ($mail->send()) {
	echo 'Message sent!';
} else {
    echo 'Mailer error: ' . $mail->ErrorInfo;
}
