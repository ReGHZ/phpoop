<?php

namespace App;

class ClassA
{
    protected static string $name = 'A';

    /*
    * static binding:
    * solusi untuk mengatasi static method pada inheritance yaitu
    * dengan menginisialisasi dengan runetime
    */
    public static function getName(): string
    {

        // return self::$name;

        return static::$name;
    }

    public static function make(): static
    {
        return new static();
    }
}
