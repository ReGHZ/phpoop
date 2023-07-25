<?php

use App\Paymentgateway\Paddle\Transaction;

//composer autoloading
require __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction(25);

//refelction api to access private property and method
// $reflectionProperty = new ReflectionProperty(Transaction::class, 'amount');
// $reflectionProperty->setAccessible(true);

// $reflectionProperty->setValue($transaction, 50);
// var_dump($reflectionProperty->getValue($transaction));

$transaction->process();
