<?php

namespace App;

trait CappuccinoMakerTrait
{
    // public function MakeCappuccino()
    // {
    //     echo static::class . ' is making cappuccino' . PHP_EOL;
    // }
    /*
    *change visibility  
    *traits in traits
    */
    // use LatteMakerTrait;

    private function MakeCappuccino()
    {
        echo static::class . ' is making cappuccino' . PHP_EOL;
    }

    // public function MakeLatte()
    // {
    //     echo static::class . ' is making latte (Cappuccino Maker Trait)' . PHP_EOL;
    // }
}
