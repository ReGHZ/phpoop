<?php

//composer autoloading
require __DIR__ . '/../vendor/autoload.php';

/*
* di php tidak bisa Multiple inheritance
* namun ada solusi untuk itu yaitu dengan traits
* dengan traits kita bisa menghindari code duplikasi
* traits tidak bisa di instansiasi
* bisa dibilang traits adalah copy paste
* jika ada konflik dalam method, bisa menggunakan insteadof dan as operator
* kita juga bisa mengganti visibilitas method traits dengan as operator (not good to use)
* kita juga bisa menggunakan traits didalam traits
* abstract juga bisa digunakan dalam traits dantidak perlu mengubah class menjadi abstract
* daripada abstract, mending menggunakan setter method
* traits juga memiliki static method dan static property
*/

//instansiasi

$coffeeMaker = new App\CoffeeMaker();
$coffeeMaker->MakeCoffee();

$latteMaker = new App\LatteMaker();
$latteMaker->MakeCoffee();
$latteMaker->MakeLatte();

$cappuccinoMaker = new App\CappuccinoMaker();
$cappuccinoMaker->MakeCoffee();
$cappuccinoMaker->MakeCappuccino();

/*
* traits
*/
$allinoneCoffeeMaker = new App\AllInOneCoffeeMaker();
$allinoneCoffeeMaker->MakeCoffee();
$allinoneCoffeeMaker->MakeLatte();
// $allinoneCoffeeMaker->MakeOriginalLatte();
$allinoneCoffeeMaker->MakeCappuccino();

/*
* static 
*/

// \App\LatteMaker::foo();
// echo \App\LatteMaker::$x;

// \App\CoffeeMaker::$foo = 'foo';
// \App\LatteMaker::$foo = 'foo';
// \App\AllInOneCoffeeMaker::$foo = 'bar';

// echo \App\LatteMaker::$foo . ' ' . \App\AllInOneCoffeeMaker::$foo . PHP_EOL;
