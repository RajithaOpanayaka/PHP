<?php

require_once "PrintQuestion.php";
require_once "Question.php";

class TestQuestion extends Question implements PrintQuestion{
    
    public function printQuestion(){
        echo "_______________\n";
        echo "\n";
    }
}

?>