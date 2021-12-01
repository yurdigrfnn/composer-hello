<?php

namespace yurdiansyah\belajar;

class Costomor
{
    public function __construct(private string $name)
    {
        
    }
    public function sayHello(string $name)
    {
        return "hay $name ,my name is $this->name";
    }
}