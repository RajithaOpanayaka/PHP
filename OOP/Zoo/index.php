<?php
    require_once "Animal.php";
    require_once "Dog.php";
    ///Create animal
    $animal = new Animal(10,"Black");
    var_dump($animal);
    echo '<br>';
    $animal->setColor("Brown");
    $animal->setSize(20);
    var_dump($animal);
    echo '<br>';
    $dog= new Dog(13,"Brown");
    var_dump($dog);
    echo '<br>';
    $dog->setType("Shepeard");
    echo $dog->getType();

    $animal->move();
    $dog->move();

?>