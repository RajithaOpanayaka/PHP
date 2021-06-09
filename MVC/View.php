<?php

namespace MVC;

class View
{   
    public $controller;

    public function __construct($controller)
    {
        $this->controller = $controller;
    }

    public function input($message)
    {
        $this->controller->setMessage($message);
    }
    public function output($data)
    {
        echo "$data \n";
    }
}