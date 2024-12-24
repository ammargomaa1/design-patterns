<?php
namespace Patterns\Behavioral\Observer\Enums;

enum EventType {
    case OPEN_POSITION;
    case NEW_PRODUCT;
    case NEW_OFFER;
}