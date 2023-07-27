<?php

namespace App;

class AllInOneCoffeeMaker extends CoffeeMaker
{
    // use CappuccinoMakerTrait {
    //     CappuccinoMakerTrait::MakeLatte insteadof LatteMakerTrait;
    // }
    // use LatteMakerTrait {
    //     LatteMakerTrait::MakeLatte as MakeOriginalLatte;
    // }

    /*
    *change visibility 
    */
    use CappuccinoMakerTrait {
        CappuccinoMakerTrait::MakeCappuccino as public;
    }
    use LatteMakerTrait;

    /*
    * abstract traits methods
    */
    // private string $milkType = 'whole-milk';
    // public function getMilkType(): string
    // {
    //     return $this->milkType;
    // }
}
