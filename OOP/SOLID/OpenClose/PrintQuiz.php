<?php

class PrintQuiz{
    public $questions;
    public function PrintQuiz($questions=[]){
        $this->questions=$questions;
    }
    public function print(){
        foreach($this->questions as $question){
            echo $question["description"]."\n";
            switch($question["type"]){
                case "bool":
                    echo "1. True \n";
                    echo "2. False \n";
                    break;
                case "test":
                    echo "_______________\n";

            }
        }
    }

}

$quiz=[
    ["type"=>"bool","description"=>"Select True or False answer"],
    ["type"=>"test","description"=>"write short answer"]
];

$printQuiz=new PrintQuiz($quiz);
$printQuiz->print();


?>