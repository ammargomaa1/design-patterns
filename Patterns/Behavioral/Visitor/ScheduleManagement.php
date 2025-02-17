<?php

namespace Patterns\Behavioral\Visitor;

use Patterns\Behavioral\Visitor\Visitor\ScheduleManagementVisitor;

interface ScheduleManagement
{
    public function generateReport(): void;
    public function calculateOverTime(): void;
    public function accept(ScheduleManagementVisitor $visitor): void;
}
