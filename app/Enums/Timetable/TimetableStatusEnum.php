<?php

namespace App\Enums\Timetable;

use BenSampo\Enum\Enum;

final class TimetableStatusEnum extends Enum
{
    const PENDING = 'lesson pending';
    const STARTED = 'lesson is in progress';
    const CANCELED = 'lesson canceled';
    const FINISHED = 'lesson completed';
}
