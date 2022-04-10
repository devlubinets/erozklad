<?php

namespace App\Services\Timetable;

use App\Models\School\SchoolClass;
use App\Models\Subject;
use App\Models\Timetable\Timetable;

class TimetableService
{
    /**
     * Аdd one lesson in timetable
     * @return void
     */
    public function addOneLessonToTimeTable(SchoolClass $class, Subject $subject)
    {
        $timetable = Timetable::create([
            'status' =>
        ]);
    }
}
