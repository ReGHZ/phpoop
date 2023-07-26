<?php

namespace App;

class Toaster
{
    /*
    *Parent class:
    *parent class tidak dapat menggunakan
    *method dari child class
    *untuk mengatasi ini dilakukan dengan composition
    */
    protected array $slice;
    protected int $size;

    public function __construct()
    {
        $this->slice = [];
        $this->size = 2;
    }

    public function addSlice(string $slice): void
    {
        if (count($this->slice) < $this->size) {
            $this->slice[] = $slice;
        }
    }

    public function toast()
    {
        foreach ($this->slice as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . PHP_EOL;
        }
    }
}
