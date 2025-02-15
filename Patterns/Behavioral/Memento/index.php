<?php
require_once __DIR__ . '/../../../vendor/autoload.php';

use Patterns\Behavioral\Memento\History;
use Patterns\Behavioral\Memento\TextEditor;

$editor = new TextEditor();
$history = new History;

$editor->setContent('Hello');
$history->saveHistoryState($editor->save());

echo $editor->getContent() . PHP_EOL;


$editor->setContent('Hello Everyone');
$history->saveHistoryState($editor->save());
echo $editor->getContent() . PHP_EOL;

$editor->restore($history->undo());
$editor->restore($history->undo());

echo $editor->getContent() . PHP_EOL;

$editor->setContent('Hello World');
$history->saveHistoryState($editor->save());

echo $editor->getContent() . PHP_EOL;

