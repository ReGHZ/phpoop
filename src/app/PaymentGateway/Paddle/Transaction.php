<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

class Transaction
{
    //encapsulation hanya menggunakan private,protected property
    //untuk mengakses property ini harus menggunakan sebuah method
    //hal tersebut digunakan untuk keamanan
    /*Tujuan utama encapsulation adalah untuk menyembunyikan 
    detail implementasi dari objek dan membatasi akses 
    langsung ke data objek.
    */
    private float $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function process()
    {
        echo 'Process $' . $this->amount . ' transaction';
    }
}
