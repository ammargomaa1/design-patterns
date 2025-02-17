<?php

namespace Patterns\Behavioral\Visitor;

use Patterns\Behavioral\Visitor\Visitor\ScheduleManagementVisitor;

class RemoteShiftScheduleManagement implements ScheduleManagement
{
    public function generateReport(): void{
        echo 'Generating report ,remote Shift, ' . PHP_EOL;
    }
    public function calculateOverTime(): void{
        echo 'Calculating Overtime ,remote Shift, ' . PHP_EOL;
        
    }
    public function accept(ScheduleManagementVisitor $visitor): void{
        $visitor->visitDayShift();
    }
}
