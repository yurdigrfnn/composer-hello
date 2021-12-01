<?php

namespace yurdiansyah\belajar;

class Costomer
{
    public function __construct(private string $name)
    {
        
    }
    public function sayHello(string $name)
    {
        return "hay $name ,my name is $this->name";
    }
}
