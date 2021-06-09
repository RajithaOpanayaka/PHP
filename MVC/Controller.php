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
        $msg = $this->model->getData();
        echo "Render view $msg \n";
    }
    public function setMessage($message)
    {
        $this->model->setData($message);
    }

}