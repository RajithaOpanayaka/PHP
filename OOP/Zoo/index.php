<?php

use \Zoo\Dog;
use \Zoo\Cat;

require_once "Dog.php";
require_once "Cat.php";

$dog = new Dog(13, "Brown");
$dog->setType("Shepeard");

$cat = new Cat(5, "Gray");

//Polymorphism
$animals = [$dog, $cat];
foreach ($animals as $animal) {
    $animal->play();
}

