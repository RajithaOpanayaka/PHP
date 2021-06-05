<?php

abstract class PaymentProcessor{
    protected $user;

    public function __construct($user)
    {
        $this->user=$user;
    }
    abstract public function pay($amount);
}

?>