<?php

use App\Paymentgateway\Paddle\Transaction;
use App\Enums\Status;
use App\DB;

//composer autoloading
require __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction(2, 'transaction 1');

//access class constants
// $transaction->setStatus(Status::PAID);

$db = DB::getInstance([]);
