<?php

require_once '../Notification/Email.php';
require_once '../Paymentgateway/Paddle/CustomerProfile.php';
require_once '../Paymentgateway/Paddle/Transaction.php';
require_once '../Paymentgateway/Stripe/Transaction.php';

use Paymentgateway\Stripe\Transaction as StripeTransaction;
use Paymentgateway\Paddle\{Transaction, CustomerProfile};
//or
use Paymentgateway\Paddle;

var_dump(new StripeTransaction());
var_dump(new Transaction());
