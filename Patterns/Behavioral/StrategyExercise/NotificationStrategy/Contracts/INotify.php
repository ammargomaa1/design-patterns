<?php

namespace Patterns\Behavioral\StrategyExercise\NotificationStrategy\Contracts;

use Patterns\Behavioral\StrategyExercise\Models\User;

interface INotify
{
    public function notify(User $user, string $message);
}
