<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Notification\Email;

class Transaction
{
    //use "\" to use build in function php
    public function __construct()
    {
        var_dump(new Email());
    }
}
