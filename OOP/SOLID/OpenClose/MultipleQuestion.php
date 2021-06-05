<?php

require_once "PrintQuestion.php";
require_once "Question.php";

class MultipleQuestion extends Question implements PrintQuestion{
    public $options;

    public function __construct($description,$options=[])
    {
        parent::__construct($description);
        $this->options=$options;
    }
    
    public function printQuestion(){
        foreach($this->options as $option){
            echo $option."\n";
        }
        echo "\n";
    }
}

?>