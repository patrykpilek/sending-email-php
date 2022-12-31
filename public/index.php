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

/**
 * Send an email
 */
$mail->setFrom('no-replay@patrykpilek.com', 'Patryk Pilek');
$mail->addAddress('patryk.pilek@gmail.com', 'Dave');

$mail->Subject = 'An email sent from PHP';
$mail->Body = 'This is a test message';

if ($mail->send()) {
	echo 'Message sent!';
} else {
    echo 'Mailer error: ' . $mail->ErrorInfo;
}
