<?php

namespace Patterns\Behavioral\StrategyExercise;

use Patterns\Behavioral\StrategyExercise\Models\User;
use Patterns\Behavioral\StrategyExercise\NotificationStrategy\Contracts\INotify;

class NotificationService
{
    public function __construct(
        private INotify $notificationStrategy
    )
    {
        
    }
    
    /**
     * notify
     *
     * @param  User $user
     * @param  string $message
     * @return void
     */
    public function notify(User $user, string $message){
        $this->notificationStrategy->notify($user, $message);
    }
}
