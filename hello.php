<?php

/**
 * Write a message to a file in the same directory
 */
$file = dirname(__FILE__) . '/output.txt';

$data = "hello, it's " . date('d/m/Y H:i:s') . "\n";

file_put_contents($file, $data, FILE_APPEND);
