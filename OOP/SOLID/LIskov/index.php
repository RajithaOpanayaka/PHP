<?php

require_once "Rectangle.php";
require_once "Square.php";

class RecEnlarge{
    public static function increaseWidth($rectangle){
        $rectangle->setWidth($rectangle->getWidth()+1);
    }
}

$rectangle1=new Rectangle(5,5);
$square=new Square(5,5);

echo "Area of 1 ".$rectangle1->area()."\n";
echo "Area of 2 ".$square->area()."\n";

RecEnlarge::increaseWidth($rectangle1);
RecEnlarge::increaseWidth($square);

echo "Increased area of 1 ".$rectangle1->area()."\n";
echo "Increased area of 2 ".$square->area()."\n";

?>