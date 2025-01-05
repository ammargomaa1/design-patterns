<?php

namespace Patterns\Behavioral\TemplateMethod;

class GeneratedReport
{
    public function __construct(public bool $isPassed)
    {
        $this->isPassed = $isPassed;
    }

    public function isPassed(): bool{
        return $this->isPassed;
    }
}
