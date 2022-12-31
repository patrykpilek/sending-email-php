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
$mail->setFrom('no-replay@patrykpilek.com');
$mail->addAddress('patryk.pilek@gmail.com');

// Multiple "To" addresses
$mail->addAddress('lpilek19@googlemail.com', 'Lukasz Pilek');
$mail->addAddress('lpilek19@googlemail.com');

// "Cc" addresses
$mail->addCC('patryk.pilek@gmail.com', 'Patryk');
$mail->addCC('patryk.pilek@gmail.com');

// "Bcc" addresses
$mail->addBCC('lpilek19@googlemail.com');
$mail->addBCC('patryk.pilek@gmail.com');


$mail->Subject = 'An email sent from PHP';
$mail->Body = 'This is a test message';

if ($mail->send()) {
	echo 'Message sent!';
} else {
    echo 'Mailer error: ' . $mail->ErrorInfo;
}
