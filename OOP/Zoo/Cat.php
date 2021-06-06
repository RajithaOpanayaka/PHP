<?php

namespace Zoo;

require_once "Animal.php";
class Cat extends Animal implements Pet
{
    public function play()
    {
        echo "Play with Yarn.\n";
    }
    public function move()
    {
        echo "walk. \n";
    }
}
