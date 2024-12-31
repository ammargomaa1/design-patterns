<?php

namespace Patterns\Behavioral\Strategy\PricingStrategy\Contracts;

interface IPricingStrategy
{
    public function calculatePrice(float $price);
}
