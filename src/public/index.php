<?php

//composer autoloading
require __DIR__ . '/../vendor/autoload.php';

//instansiasi
$invoice = new \App\Invoice(15);

/*
* __get 
* __set 
*/
// $invoice->amount = 55;
// echo $invoice->amount . PHP_EOL;

// var_dump(isset($invoice->amount));

// unset($invoice->amount);

/*
* __call 
*/
// $invoice->process(1, 2, 3);
// App\invoice::process(1, 2, 3);

/*
* __callStatic 
*/
// $invoice->process(15, 'some description');

/*
* __toString 
*/
// echo $invoice;

/*
* __invoke 
*/
// $invoice();

/*
* __debugInfo 
*/
var_dump($invoice);
