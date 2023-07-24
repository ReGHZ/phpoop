<?php

use App\Paymentgateway\Paddle\Transaction;
use App\Enums\Status;

//composer autoloading
require __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction();

//access class constants
$transaction->setStatus(Status::PAID);

var_dump($transaction);
