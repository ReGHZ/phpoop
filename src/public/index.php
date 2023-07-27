<?php

//composer autoloading
require __DIR__ . '/../vendor/autoload.php';

//instansiasi

/*
* non static
*/
// $classA = new App\ClassA();
// $classB = new App\ClassB();

// echo $classA->getName() . PHP_EOL;
// echo $classB->getName() . PHP_EOL;

/*
* static
*/
// echo \App\ClassA::getName();
// echo \App\ClassB::getName();

var_dump(\App\ClassB::make());
