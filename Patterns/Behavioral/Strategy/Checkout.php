<?php

namespace Patterns\Behavioral\Strategy;

use Patterns\Behavioral\Strategy\Enums\PaymentMethod;
use Patterns\Behavioral\Strategy\PaymentStrategy\Contracts\IPaymentMethod;

class Checkout
{    
    
    public function __construct(
        private IPaymentMethod $paymentMethod,
    )
    {
        
    }
    /**
     * processPayment
     *
     * @param  float $amount
     * @return void
     */
    public function processPayment(float $amount){
        $this->paymentMethod->processPayment($amount);
    }
}
