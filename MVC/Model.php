<?php

namespace MVC;

class Model
{   
    private $data="";
    
    public function getData()
    {
        return $this->data;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
}