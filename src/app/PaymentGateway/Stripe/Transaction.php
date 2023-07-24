<?php

declare(strict_types=1);

namespace App\PaymentGateway\Stripe;

use App\Paymentgateway\Paddle\Transaction as PaddleTransaction;

class Transaction
{

    public function __construct()
    {
        var_dump(new PaddleTransaction());
    }
}
