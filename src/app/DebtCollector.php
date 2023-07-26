<?php

namespace App;

interface DebtCollector
{
    /*
    *interface must be public
    *interafce tidak boleh memiliki property
    *akan tetapi bisa menggunakan const
    *interface hanya bisa memiliki method declaration seperti dibawah
    *bisa implementasi banyak interface 
    */
    public function collect(float $owedAmount): float;
}
