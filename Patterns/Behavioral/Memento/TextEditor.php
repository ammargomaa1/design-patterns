<?php

namespace Patterns\Behavioral\Memento;

use SplStack;

class TextEditor
{
    private string $content;
    private SplStack $prevState;
    private SplStack $nextState;

    public function __construct()
    {
        $this->content = "";
        $this->prevState = new SplStack();
        $this->nextState = new SplStack();
    }

    public function save(): TextEditorState
    {
        return new TextEditorState($this->content);
    }

    public function restore(TextEditorState $textEditorState){
        $this->content = $textEditorState->getContent();
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
}
