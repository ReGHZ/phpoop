<?php

namespace App;

abstract class Field implements Renderable
{
    public function __construct(protected string $name)
    {
    }

    /*
    * jika parent memiliki abstract method, maka
    * child class harus implementasi abstract method 
    */
}
