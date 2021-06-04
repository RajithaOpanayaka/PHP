<?php

require_once "Animal.php";

class Dog extends Animal{
    private $type;
    public function setType($type){
        $this->type=$type;
    }
    public function getType(){
        return $this->type;
    }
}



?>