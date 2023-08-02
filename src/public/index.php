<?php

//composer autoloading
require __DIR__ . '/../vendor/autoload.php';

/*
* bagaimana cara object komparasi dengan php
*/

$invoice1 = new App\Invoice(new App\Customer('customer 1'), 25, 'test');
$invoice2 = new App\Invoice(new App\Customer('customer 2'), 25, 'test');

echo 'invoice1 == invoice2' . PHP_EOL;
var_dump($invoice1 == $invoice2);

echo 'invoice1 === invoice2' . PHP_EOL;
var_dump($invoice1 === $invoice2);

var_dump($invoice1, $invoice2);
