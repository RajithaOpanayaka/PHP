<?php

require_once "Person.php";
require_once "Student.php";

$person1 = new Person("hello",15);
$person2 = new Person("hello2",15);

var_dump($person1);
echo $person1->getAge().'<br>';
echo Person::getCounter(); 

