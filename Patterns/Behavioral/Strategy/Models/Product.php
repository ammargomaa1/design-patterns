<?php

namespace Patterns\Behavioral\Strategy\Models;

use Patterns\Behavioral\Strategy\Enums\MembershipType;
use Patterns\Behavioral\Strategy\PricingStrategy\Contracts\IPricingStrategy;

class Product
{
    public function __construct(
        public string $name,
        public float $price,
        public IPricingStrategy $pricingStrategy
    )
    {
        
    }
        
    /**
     * calculatePrice
     *
     * @param  string $membership
     * @return float
     */
    public function calculatePrice() :float{
        return $this->pricingStrategy->calculatePrice($this->price);
    }
}
