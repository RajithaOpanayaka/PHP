<?php

class Rectangle{
    private $height;
    private $width;
    public function __construct($height,$width)
    {
        $this->height=$height;
        $this->width=$width;
        
    }
    public function setWidth($width){
        $this->width=$width;
    }
    public function setHeight($height){
        $this->height=$height;
    }
    public function area(){
        return $this->height*$this->width;
    }
    public function getWidth(){
        return $this->width;
    }
}

?>