<?php

namespace App;

trait LatteMakerTrait
{
    /*
    * traits in traits
    */

    protected string $milkType = 'whole-milk';

    /*
     * static property 
    */

    public static int $x = 1;
    public static string $foo;

    public function MakeLatte()
    {
        echo __CLASS__ . ' is making latte with ' . $this->milkType . PHP_EOL;
    }

    /*
    * abstract traits methods
    */

    // abstract public function getMilkType(): string;

    /*
     * setter method 
    */

    public function setMilkType(string $milkType): static
    {
        $this->milkType = $milkType;

        return $this;
    }

    /*
     * static method 
    */

    // public static function Foo()
    // {
    //     echo 'Foo Bar' . PHP_EOL;
    // }
}
