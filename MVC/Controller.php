<?php

namespace MVC;

class Controller
{   
    private $model;

    public function __construct($model)
    {
        $this->model =  $model;
    }
    public function getMessage()
    {
        return $this->model->getData();
    }
    public function setMessage($message)
    {
        $this->model->setData($message);
    }

}