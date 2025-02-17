<?php

use Patterns\Behavioral\Visitor\DayShiftScheduleManagement;
use Patterns\Behavioral\Visitor\NightShiftScheduleManagement;
use Patterns\Behavioral\Visitor\RemoteShiftScheduleManagement;
use Patterns\Behavioral\Visitor\Visitor\ManageLeaveRequestVisitor;

require_once __DIR__ . '/../../../vendor/autoload.php';

$dayShiftSchedule = (new DayShiftScheduleManagement);

$nightShiftSchedule = (new NightShiftScheduleManagement);

$remoteSchedule = new RemoteShiftScheduleManagement;

$dayShiftSchedule->calculateOverTime();

$dayShiftSchedule->accept(new ManageLeaveRequestVisitor);