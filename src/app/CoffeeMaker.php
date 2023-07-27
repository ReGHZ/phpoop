<?php

namespace App;

class CoffeeMaker
{
    /*
     * static property 
    */
    // public static string $foo;
    public function MakeCoffee()
    {
        echo static::class . ' is making coffee' . PHP_EOL;
    }
}
