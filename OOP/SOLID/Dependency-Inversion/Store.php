<?php

require_once "Stripe.php";
require_once "Paypal.php";

class Store{
    private $stripe;
    
    public function __construct($user)
    {
        $this->stripe = new Stripe($user);
    }
    public function purchaseBike($quantity)
    {
        $this->stripe->makePayment(200*$quantity);
    }
}

$store = new Store("Sam");
$store->purchaseBike(1);

?>