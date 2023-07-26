<?php

//composer autoloading
require __DIR__ . '/../vendor/autoload.php';

/*
* polymorphism berarti banyak form
* object yang dikatakan polymorphism adalah
* bisa pass multiple instances of checks
*/
//instansiasi
$collector = new \App\DebtCollectionService();

echo $collector->collectDebt(new \App\Person()) . PHP_EOL;
