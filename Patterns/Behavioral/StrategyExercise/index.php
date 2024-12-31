<?php

use Patterns\Behavioral\StrategyExercise\Models\User;
use Patterns\Behavioral\StrategyExercise\NotificationService;
use Patterns\Behavioral\StrategyExercise\NotificationStrategy\NotifyUsingSMSStrategy;

require_once __DIR__ . '/../../../vendor/autoload.php';


$service = new NotificationService(new NotifyUsingSMSStrategy);

$user = new User('Ammar Gomaa');

$service->notify($user, 'There is a new update available');