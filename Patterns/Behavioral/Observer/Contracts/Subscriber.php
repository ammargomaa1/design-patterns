<?php

namespace Patterns\Behavioral\Observer\Contracts;

interface Subscriber
{
    public function notify(string $message);
    public function getName(): string;
}
