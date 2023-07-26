<?php

//composer autoloading
require __DIR__ . '/../vendor/autoload.php';

/*
* abstract class tidak bisa di instantsiasi
* bisa memiliki abstract method sebagai
* tambahan dari regular method dan property
* child classes harus implementasi abstract method
*/

$field = [
    /*
    * baseField dan booleanField bisa di instansiasi
    * tapi hal tersebut tidak boleh dilakukan karena
    * hal tersebut merupakan template/blueprint
    * maka hal tersebut kita bisa menggunakan abstract classes
    * setelah abstract class dibuat maka object baseField dan booleanField
    * tidak bisa di instantiasi
    */
    // new \App\Field('baseField'),
    new \App\Text('textField'),
    // new \App\Boolean('booleanField'),
    new \App\Checkbox('checkboxField'),
    new \App\Radio('radioField'),
];

foreach ($field as $f) {
    echo $f->render() . '<br />';
}
