<?php

class Animal{
    private $size;
    private $color;

    function __construct($size,$color)
    {
        $this->size=$size;
        $this->color=$color;
    }

    public function setSize($size){
        $this->size=$size;
    }
    public function getSize(){
        return $this->size;
    }
    public function setColor($color){
        $this->color=$color;
    }
    public function getColor(){
        return $this->color;
    }
    public function move(){
        echo "move<br>";
    }
}

?>