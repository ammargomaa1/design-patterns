<?php

namespace Patterns\Behavioral\Strategy\PaymentStrategy;

use Patterns\Behavioral\Strategy\PaymentStrategy\Contracts\IPaymentMethod;

class PayPalStrategy implements IPaymentMethod
{
    public function processPayment(float $amount)
    {
        echo 'Processing payment of paypal with amount '. $amount . PHP_EOL;
    }
}
