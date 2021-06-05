<?php

require_once "TestQuestion.php";
require_once "BooleanQuestion.php";
require_once "MultipleQuestion.php";
class PrintQuiz{
    public $questions;
    public function PrintQuiz($questions=[]){
        $this->questions=$questions;
    }
    public function print(){
        foreach($this->questions as $question){
            echo $question->getDescription()."\n";
            $question->printQuestion();  
        }
    }

}

$quiz=[
    new TestQuestion("1. Write short answer"),
    new BooleanQuestion("2. Select True or False answer"),
    new TestQuestion("3. Write short answer"),
    new MultipleQuestion("4. Choose the correct answer",["A. Greater than","B. Less than"])
];

$printQuiz=new PrintQuiz($quiz);
$printQuiz->print();


?>