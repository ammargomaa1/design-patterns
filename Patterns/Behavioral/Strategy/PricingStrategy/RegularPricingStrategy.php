<?php

namespace Patterns\Behavioral\Strategy\PricingStrategy;

use Patterns\Behavioral\Strategy\PricingStrategy\Contracts\IPricingStrategy;

class RegularPricingStrategy implements IPricingStrategy
{    
    /**
     * calculatePrice
     *
     * @param  float $price
     * @return void
     */
    public function calculatePrice(float $price)
    {
        return $price;
    }
}
