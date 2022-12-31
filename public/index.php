<?php

//echo 'Hello from the public folder!';

/**
 * PHPMailer Autoloader
 */
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

/**
 * Check PHPMailer is loaded
 */
$mail = new PHPMailer();

echo get_class($mail);

