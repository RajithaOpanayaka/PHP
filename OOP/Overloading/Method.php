<?php

class Method{
    public function __call($name,$arguments){
        echo "In $name func ".implode(',',$arguments).'<br>';
    }
    public static function __callStatic($name, $arguments)
    {
        echo "In static $name func ".implode(',',$arguments).'<br>';
    }
}

$methodTest=new Method();
$methodTest->hello("a","b");
Method::hello2("c","d");

?>