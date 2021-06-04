<?php
    require_once "Animal.php";
    ///Create animal
    $animal = new Animal(10,"Black");
    var_dump($animal);
    echo '<br>';
    $animal->setColor("Brown");
    $animal->setSize(20);
    var_dump($animal);

?>