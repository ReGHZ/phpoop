<?php

namespace App;

class CappuccinoMaker extends CoffeeMaker
{
    use CappuccinoMakerTrait {
        CappuccinoMakerTrait::MakeCappuccino as public;
    }
}
