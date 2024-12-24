<?php
namespace Patterns\Behavioral\Observer\Models;

use Patterns\Behavioral\Observer\Contracts\Subscriber;

class Customer implements Subscriber
{

    /**
     * @var string
     */
    private string $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $message
     * @return void
     */
    public function notify(string $message): void
    { 
        echo 'Notifying ' . $this->name . ' about ' . $message . PHP_EOL;
    }

    
}