<?php

//composer autoloading
require __DIR__ . '/../vendor/autoload.php';

/*
*Anomymouse Classes: 
*Kelas anonim adalah kelas yang tidak memiliki nama. Mereka digunakan 
*dalam situasi di mana Anda hanya perlu membuat objek 
*sekali dan tidak perlu menyimpannya untuk digunakan berulang kali;
*class anonim juga bisa passing argument didalam ();
*class anonim juga bisa inheritance dan extend dengan class lain;
*class anonim juga bisa implement interface;
*kita tidak bisa type hinting dengan anonim class, untuk itu kita harus
*memakai interface;
*kita juga bisa membuat class anonim didalam regular class, sehingga 
*hal tersebut disebut dengan nesting;
*main cases untuk anonim class adalah untuk testing
*/
//instansiasi
// $obj = new class(1, 2, 3) implements \App\MyInterface
// {
//     public function __construct(public int $a, public int $b, public int $c)
//     {
//     }
// };

// foo($obj);

// function foo(\App\MyInterface $obj)
// {
//     var_dump($obj);
// }

/*
 * nesting 
 */

$obj = new App\ClassA(1, 2);

var_dump($obj->bar());
