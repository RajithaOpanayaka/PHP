<?php

namespace app\Models;

class Model
{
    private $message;
    public function setMessage($message)
    {
        $this->message = $message;
    }
    public function getMessage()
    {
        return $this->message;
    }
}

