<?php

namespace Patterns\Behavioral\Visitor;

use Patterns\Behavioral\Visitor\Visitor\ScheduleManagementVisitor;

class DayShiftScheduleManagement implements ScheduleManagement
{
    public function generateReport(): void{
        echo 'Generating report ,day Shift, ' . PHP_EOL;
    }
    public function calculateOverTime(): void{
        echo 'Calculating Overtime ,day Shift, ' . PHP_EOL;
        
    }

    public function accept(ScheduleManagementVisitor $visitor): void{
        $visitor->visitDayShift();
    }

}
