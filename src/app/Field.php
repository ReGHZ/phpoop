<?php

namespace App;

abstract class Field
{
    public function __construct(protected string $name)
    {
    }

    /*
    * jika parent memiliki abstract method, maka
    * child class harus implementasi abstract method 
    */
    abstract public function render(): string;
}
