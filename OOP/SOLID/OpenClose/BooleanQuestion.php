<?php

require_once "PrintQuestion.php";
require_once "Question.php";

class BooleanQuestion extends Question implements PrintQuestion{
    
    public function printQuestion(){
        echo "1. True \n";
        echo "2. False \n";
        echo "\n";
    }
}

?>