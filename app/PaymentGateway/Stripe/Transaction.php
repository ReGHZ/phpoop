<?php

declare(strict_types=1);

namespace PaymentGateway\Stripe;

use Paymentgateway\Paddle\Transaction as PaddleTransaction;

class Transaction
{

    public function __construct()
    {
        var_dump(new PaddleTransaction());
    }
}
