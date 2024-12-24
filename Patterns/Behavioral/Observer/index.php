<?php
require_once __DIR__ . '/../../../vendor/autoload.php';

use Patterns\Behavioral\Observer\Enums\EventType;
use Patterns\Behavioral\Observer\Models\Customer;
use Patterns\Behavioral\Observer\Models\Offer;
use Patterns\Behavioral\Observer\Models\Product;
use Patterns\Behavioral\Observer\OnlineMarketPlace;

$onlineMarketPlace = new OnlineMarketPlace();

$onlineMarketPlace->subscribe(EventType::NEW_PRODUCT, new Customer('John'));
$onlineMarketPlace->subscribe(EventType::NEW_PRODUCT, new Customer('ahmed'));
$onlineMarketPlace->subscribe(EventType::NEW_OFFER, new Customer('helmy'));

$onlineMarketPlace->unsubscribe(EventType::NEW_PRODUCT, new Customer('ahmed'));

$onlineMarketPlace->addProduct(new Product('Shoes', 100));
$onlineMarketPlace->addOffer(new Offer('Discount on shoes', 10));