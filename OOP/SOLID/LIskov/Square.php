<?php
require_once "Rectangle.php";

class Square extends Rectangle{
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
