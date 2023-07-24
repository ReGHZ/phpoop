<?php

// require_once __DIR__ . '../app/Notification/Email.php';
// require_once __DIR__ . '../app/Paymentgateway/Paddle/CustomerProfile.php';
// require_once __DIR__ . '../app/Paymentgateway/Paddle/Transaction.php';
// require_once __DIR__ . '../app/Paymentgateway/Stripe/Transaction.php';

//manual autoloading
// spl_autoload_register(function ($class) {
//     $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';

//     if (file_exists($path)) {
//         require_once $path;
//     }
// });

//composer autoloading
require __DIR__ . '/../vendor/autoload.php';

use App\Paymentgateway\Stripe\Transaction as StripeTransaction;
use App\Paymentgateway\Paddle\{Transaction, CustomerProfile};
//or
use App\Paymentgateway\Paddle;

var_dump(new StripeTransaction());
var_dump(new Transaction());
//or
var_dump(new Paddle\Transaction());
