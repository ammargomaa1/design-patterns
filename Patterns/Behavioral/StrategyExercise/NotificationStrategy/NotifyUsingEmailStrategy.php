<?php

namespace Patterns\Behavioral\StrategyExercise\NotificationStrategy;

use Patterns\Behavioral\StrategyExercise\Models\User;
use Patterns\Behavioral\StrategyExercise\NotificationStrategy\Contracts\INotify;

class NotifyUsingEmailStrategy implements INotify
{
    public function notify(User $user, string $message){
        echo "notifying " . $user->username . " about " . $message . " Using Email" . PHP_EOL;
    }
}