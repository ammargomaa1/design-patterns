<?php

namespace Patterns\Behavioral\Memento;

class TextEditorState
{

    public function __construct(private string $content)
    {
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
