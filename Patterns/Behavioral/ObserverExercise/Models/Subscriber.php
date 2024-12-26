<?php

namespace Patterns\Behavioral\ObserverExercise\Models;

use Patterns\Behavioral\ObserverExercise\Contracts\Subscriber as ContractsSubscriber;

class Subscriber implements ContractsSubscriber
{    
    /**
     * __construct
     *
     * @param string $name
     * @return void
     */
    public function __construct(
        public string $name
    )
    {
    }
    
    /**
     * getName
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * notify
     *
     * @param  string $message
     * @return void
     */
    public function notify(string $message)
    {
        echo 'notifying ' . $this->name . ' about '. $message . PHP_EOL;
    }
}
