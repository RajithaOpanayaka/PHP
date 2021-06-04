<?php
class Person{
    public $name;
    private $age;
    public static $counter=0;

    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
        self::$counter++;
    }
    public function getAge(){
        return $this->age;
    }
    public static function getCounter(){
        return self::$counter;
    }
}

?>