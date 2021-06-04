<?php

class Cat extends Animal implements Pet{
    public function play(){
        echo "Play with Yarn. <br>";
    }
    public function move(){
        echo "walk. <br>";
    }
}


?>