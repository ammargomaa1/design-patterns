<?php

use Patterns\Behavioral\Strategy\Checkout;
use Patterns\Behavioral\Strategy\Enums\MembershipType;
use Patterns\Behavioral\Strategy\Enums\PaymentMethod;
use Patterns\Behavioral\Strategy\Models\Product;
use Patterns\Behavioral\Strategy\PaymentStrategy\BankTransferStrategy;
use Patterns\Behavioral\Strategy\PricingStrategy\PremiumPricingStrategy;
use Patterns\Behavioral\Strategy\PricingStrategy\RegularPricingStrategy;

require_once __DIR__ . '/../../../vendor/autoload.php';


$mobile = new Product('Samsun S23 Ultra', 23000.99, new RegularPricingStrategy);

$mobilePrice = $mobile->calculatePrice();


$wallet = new Product('Wallet', 23000.99, new PremiumPricingStrategy);

$walletPrice = $wallet->calculatePrice();

$checkout = new Checkout(new BankTransferStrategy);

$checkout->processPayment($mobilePrice);