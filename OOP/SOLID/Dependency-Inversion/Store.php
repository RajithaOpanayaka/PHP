<?php

require_once "PaymentProcessor.php";
require_once "Stripe.php";
require_once "Paypal.php";
class Store{
    private $paymentProcessor;
    
    public function __construct($paymentProcessor)
    {
        $this->paymentProcessor = $paymentProcessor;
    }
    public function purchaseBike($quantity)
    {
        $this->paymentProcessor->pay(200*$quantity);
    }
}
$stripe = new Stripe("Sam");
$paypal = new Paypal("Jay"); 
$store = new Store($paypal);
$store->purchaseBike(1);

?>