<?php

namespace Patterns\Behavioral\Memento;

use SplStack;

class History
{
    private SplStack $prevState;
    public function __construct()
    {
        $this->prevState = new SplStack;
    }

    public function saveHistoryState(TextEditorState $textEditorState) :void {
        $this->prevState->push($textEditorState);
    }

    public function undo()
    {
        if (!$this->prevState->isEmpty()) {
           return $this->prevState->pop();
        }

        return null;
    }
}
