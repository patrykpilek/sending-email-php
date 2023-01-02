<?php

/**
 * Start the timer
 */
$start_time = microtime(true);


/**
 * Composer autoloader
 */
require '../vendor/autoload.php';


/**
 * Import classes
 */
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
use MessagePack\Packer;


/**
 * Connect to the RabbitMQ server and queue
 */
$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('emails', false, false, false, false);


/**
 * Pack the data into the Message Pack format
 */
$data = [
    'from' => 'sender@example.com',
    'to' => 'patryk.pilek@gmail.com',
    'subject' => 'An email sent from PHP',
    'body' => 'This is a test message from RabbitMQ - CloudAMQP'
];

$packer = new Packer();
$packed = $packer->pack($data);


/**
 * Send the message to the queue
 */
$message = new AMQPMessage($packed);
$channel->basic_publish($message, '', 'emails');


/**
 * Close the connection to the RabbitMQ server
 */
$channel->close();
$connection->close();


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
