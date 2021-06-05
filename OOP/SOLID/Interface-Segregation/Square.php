<?php

require_once "ShapeInterface.php";

class Square implements ShapeInterface{
    private $width;
    private $height;

    public function __construct($width,$height)
    {
        $this->width=$width;
        $this->height=$height;
    }
    public function area(){
        return $this->width*$this->height;
    }
    
}

$square =new Square(5,5);
echo $square->area();

?>