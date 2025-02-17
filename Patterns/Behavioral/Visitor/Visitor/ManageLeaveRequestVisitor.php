<?php

namespace Patterns\Behavioral\Visitor\Visitor;

use Patterns\Behavioral\Visitor\DayShiftScheduleManagement;
use Patterns\Behavioral\Visitor\NightShiftScheduleManagement;
use Patterns\Behavioral\Visitor\RemoteShiftScheduleManagement;

class ManageLeaveRequestVisitor implements ScheduleManagementVisitor
{
    public function visitDayShift() {
        echo 'Managing Leave Requests ,day Shift, ' . PHP_EOL;
    }
    public function visitNightShift() {
        echo 'Managing Leave Requests ,night Shift, ' . PHP_EOL;
    }
    public function visitRemoteWorkShift() {
        echo 'Managing Leave Requests ,remote Shift, ' . PHP_EOL;
    }
}
