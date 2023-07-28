<?php

namespace App;

class ClassA
{
    public function __construct(public int $a, public int $b)
    {
    }
    public function foo(): string
    {
        return 'foo';
    }
    public function bar(): object
    {
        return new class($this->a, $this->b) extends ClassA
        {
            public function __construct(public int $a, public int $b)
            {
                parent::__construct($a, $b);

                echo $this->foo();
            }
        };
    }
}
