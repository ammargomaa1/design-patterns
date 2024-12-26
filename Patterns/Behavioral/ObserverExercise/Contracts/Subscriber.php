<?php
namespace Patterns\Behavioral\ObserverExercise\Contracts;

interface Subscriber
{
    public function notify(string $message);
    public function getName(): string;
}
