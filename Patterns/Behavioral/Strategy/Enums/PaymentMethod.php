<?php

namespace Patterns\Behavioral\Strategy\Enums;

enum PaymentMethod
{
    case VISA_CARD;
    case PAYPAL;
    case BANK_TRANSFER;

}
