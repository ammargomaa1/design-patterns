<?php

namespace Patterns\Behavioral\Visitor;

use Patterns\Behavioral\Visitor\Visitor\ScheduleManagementVisitor;

class NightShiftScheduleManagement implements ScheduleManagement
{
    public function generateReport(): void{
        echo 'Generating report ,night Shift, ' . PHP_EOL;
    }
    public function calculateOverTime(): void{
        echo 'Calculating Overtime ,night Shift, ' . PHP_EOL;
        
    }
    public function accept(ScheduleManagementVisitor $visitor): void{
        $visitor->visitDayShift();
    }
}
