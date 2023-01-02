<?php

/**
 * Start the timer
 */
$start_time = microtime(true);


/**
 * Composer autoloader
 */
require '../vendor/autoload.php';

use Mailgun\Mailgun;

/**
 * Send a message using Mailgun
 */

// First, instantiate the SDK with your API credentials
$mg = Mailgun::create(Config::MAILGUN_API_KEY, 'https://api.eu.mailgun.net'); // For EU servers

// Now, compose and send your message.
// $mg->messages()->send($domain, $params);
$mg->messages()->send(Config::MAILGUN_DOMAIN, [
    'from'    => 'sender@example.com',
    'to'      => 'patryk.pilek@gmail.com',
    'subject' => 'The PHP SDK is awesome!',
    'text'    => 'It is so simple to send a message.'
]);


/**
 * Calculate the time taken to execute the script
 */
$end_time = microtime(true);
$time = number_format($end_time - $start_time, 5);


/**
 * Return to index.php
 */
header("Location: index.php?time=$time");
exit();
