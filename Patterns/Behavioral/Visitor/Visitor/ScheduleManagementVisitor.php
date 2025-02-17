<?php

namespace Patterns\Behavioral\Visitor\Visitor;

use Patterns\Behavioral\Visitor\DayShiftScheduleManagement;
use Patterns\Behavioral\Visitor\NightShiftScheduleManagement;
use Patterns\Behavioral\Visitor\RemoteShiftScheduleManagement;

interface ScheduleManagementVisitor
{
    public function visitDayShift();
    public function visitNightShift();
    public function visitRemoteWorkShift();
}
