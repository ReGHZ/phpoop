<?php

namespace App;

class ToasterPro extends Toaster
{
    /*
    *Child class: 
    */

    public function __construct()
    {
        /*
        *jika meletakkan parent::__construct()
        *sesudah $this maka akan teroverride dengan parent class
        */
        parent::__construct();
        $this->size = 4;
        /*
         * inhgeritance break encapsulation
         */
    }

    public function toastBagel()
    {
        foreach ($this->slice as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . ' with bagels option ' . PHP_EOL;
        }
    }
}
