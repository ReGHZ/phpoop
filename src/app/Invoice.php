<?php

namespace App;

class Invoice
{
    function __construct(public Customer $customer, public float $amount, public string $description)
    {
    }
}
