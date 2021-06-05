<?php

class Stripe{
    private $user;
    public function __construct($user)
    {
        $this->user=$user;
    }

    public function makePayment($amount){
        echo "$this->user made payment of $$amount\n";
    }
}

?>