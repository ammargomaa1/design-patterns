<?php

namespace Patterns\Behavioral\ObserverExercise;

use Patterns\Behavioral\ObserverExercise\Contracts\Subscriber;
use Patterns\Behavioral\ObserverExercise\Enums\EventType;
use Patterns\Behavioral\ObserverExercise\Models\NewsLetter;
use Patterns\Behavioral\ObserverExercise\Models\Post;

class Blog
{
    private array $subscribers;
    private array $posts;
    private array $newsLetters;

    public function __construct()
    {
        $this->posts = [];

        $this->newsLetters = [];

        $this->initSubscriptionEvents();

    }
    
    /**
     * initSubscriptionEvents
     *
     * @return void
     */
    private function initSubscriptionEvents(){
        $this->subscribers[EventType::NEW_BLOG_POST->name] = [];
        $this->subscribers[EventType::NEW_NEWS_LETTER->name] = [];
    }
    
    /**
     * subscribe
     *
     * @param  EventType $eventType
     * @param  Subscriber $subscriber
     * @return void
     */
    public function subscribe(EventType $eventType, Subscriber $subscriber){
        $this->subscribers[$eventType->name][] = $subscriber;
    }

    public function unSubscribe(EventType $eventType, Subscriber $subscriber){
        $this->subscribers[$eventType->name] = array_filter($this->subscribers[$eventType->name],function($currentSubscriber) use ($subscriber){
            if ($subscriber->getName != $currentSubscriber->getName()) {
                return $currentSubscriber;
            }
        });
    }
    
    /**
     * addPost
     *
     * @param  Post $post
     * @return void
     */
    public function addPost(Post $post){
        $this->posts[] = $post;
        $this->notifySubscribers(EventType::NEW_BLOG_POST, 'New Post Were Added');

    }
      
    /**
     * addNewsLetter
     *
     * @param  NewsLetter $newsLetter
     * @return void
     */
    public function addNewsLetter(NewsLetter $newsLetter){
        $this->newsLetters[] = $newsLetter;
        $this->notifySubscribers(EventType::NEW_NEWS_LETTER, 'New Newsletter Were Added');
    }


    /**
     * @param EventType $eventType
     * @param string $message
     * @return void
     */
    private function notifySubscribers(EventType $eventType, string $message): void
    {
        foreach ($this->subscribers[$eventType->name] as $subscriber) {
            $subscriber->notify($message);
        }
    }
}
