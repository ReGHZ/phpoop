<?php

namespace App;

class FancyOven
{
    /*
    *Ini adalah composition 
    */
    public function __construct(private ToasterPro $toaster)
    {
    }
    public function fry()
    {
        //fry stuff
    }
    public function toast()
    {
        $this->toaster->toast();
    }
    public function toastbagel()
    {
        $this->toaster->toastBagel();
    }
}
