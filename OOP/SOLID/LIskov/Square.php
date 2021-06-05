<?php
require_once "Shape.php";

class Square extends Shape{
    public function setWidth($width){
        $this->height=$width;
        $this->width=$width;
    }
    public function setHeight($height){
        $this->height=$height;
        $this->width=$height;
    }
}

?>
