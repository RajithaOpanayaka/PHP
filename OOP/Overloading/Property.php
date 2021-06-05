<?php
class Property{


    public function __set($name,$value){
        $this->$name=$value;
    }
    public function __get($name){
        if(isset($this->$name)){
            return $this->$name;
        }
        echo "No $name";
        return null;
    }
    public function __isset($name){
        echo "Is '$name' set?\n";
        return isset($this->$name);
    }
}

$p=new Property();
$p->name=5;
echo $p->name."\n";
var_dump(isset($p->name));

?>