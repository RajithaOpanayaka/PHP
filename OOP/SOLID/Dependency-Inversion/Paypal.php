<?php

require_once "PaymentProcessor.php";
class Paypal extends PaymentProcessor{
    public function pay($amount){
        echo "$this->user made payment of $$amount using paypal\n";
    }
}

?>