<?php

namespace App;

class CollectionAgency implements DebtCollector
{
    /*
    *interface method harus di implementasikan di class yang 
    *mengimplementasikan interface
    */
    public function collect(float $owedAmount): float
    {
        $guaranteed = $owedAmount * 0.5;


        return mt_rand($guaranteed, $owedAmount);
    }
}
