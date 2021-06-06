<?php

namespace Zoo;

require_once "Animal.php";
require_once "Pet.php";

class Dog extends Animal implements Pet
{
    private $type;

    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    //override
    public function move()
    {
        echo "Run.\n";
    }
    //override
    public function play()
    {
        echo "Fetch items.\n";
    }
}


