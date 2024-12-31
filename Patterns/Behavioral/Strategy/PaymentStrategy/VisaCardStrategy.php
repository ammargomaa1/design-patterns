<?php

namespace Patterns\Behavioral\Strategy\PaymentStrategy;

use Patterns\Behavioral\Strategy\PaymentStrategy\Contracts\IPaymentMethod;

class VisaCardStrategy implements IPaymentMethod
{
    public function processPayment(float $amount)
    {
        echo 'Processing payment of visa card with amount ' . $amount . PHP_EOL;

    }
}
