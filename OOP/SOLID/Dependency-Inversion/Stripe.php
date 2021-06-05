<?php

require_once "PaymentProcessor.php";
class Stripe extends PaymentProcessor{
   
    public function pay($amount){
        echo "$this->user made payment of $$amount using Stripe.\n";
    }
}

?>