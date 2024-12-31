<?php

namespace Patterns\Behavioral\StrategyExercise\NotificationStrategy;

use Patterns\Behavioral\StrategyExercise\Models\User;
use Patterns\Behavioral\StrategyExercise\NotificationStrategy\Contracts\INotify;

class NotifyUsingSMSStrategy implements INotify
{
    public function notify(User $user, string $message) {
        echo "notifying " . $user->username . " about " . $message . " Using SMS" . PHP_EOL;
    }
}
