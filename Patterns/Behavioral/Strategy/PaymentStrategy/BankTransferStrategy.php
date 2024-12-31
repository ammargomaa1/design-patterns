<?php

namespace Patterns\Behavioral\Strategy\PaymentStrategy;

use Patterns\Behavioral\Strategy\PaymentStrategy\Contracts\IPaymentMethod;

class BankTransferStrategy implements IPaymentMethod
{
    public function processPayment(float $amount){
        echo 'Processing payment of bank transfer with amount ' . $amount . PHP_EOL;
    }
}
