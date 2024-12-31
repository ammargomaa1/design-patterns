<?php

namespace Patterns\Behavioral\Strategy\PaymentStrategy\Contracts;

interface IPaymentMethod
{    
    /**
     * processPayment
     *
     * @param  float $amount
     * @return void
     */
    public function processPayment(float $amount);
}
