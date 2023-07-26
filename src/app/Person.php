<?php

namespace App;

class Person implements DebtCollector
{
    /*
    *interface method harus di implementasikan di class yang 
    *mengimplementasikan interface
    */
    public function collect(float $owedAmount): float
    {
        return $owedAmount * 0.65;
    }
}
