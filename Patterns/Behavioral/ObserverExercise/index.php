<?php

use Patterns\Behavioral\ObserverExercise\Blog;
use Patterns\Behavioral\ObserverExercise\Enums\EventType;
use Patterns\Behavioral\ObserverExercise\Models\NewsLetter;
use Patterns\Behavioral\ObserverExercise\Models\Post;
use Patterns\Behavioral\ObserverExercise\Models\Subscriber;

require_once __DIR__ . '/../../../vendor/autoload.php';

$blog = new Blog();

$post = new Post;

$newsletter = new NewsLetter;

$ammar = new Subscriber('Ammar');
$Omar = new Subscriber('Omar');

$Sohaib = new Subscriber('Sohaib');

$Ali = new Subscriber('Ali');

$blog->subscribe(EventType::NEW_BLOG_POST, $ammar);
$blog->subscribe(EventType::NEW_NEWS_LETTER, $Omar);
$blog->subscribe(EventType::NEW_BLOG_POST, $Sohaib);
$blog->subscribe(EventType::NEW_BLOG_POST, $Ali);

$blog->addNewsLetter($newsletter);
$blog->addPost($post);


