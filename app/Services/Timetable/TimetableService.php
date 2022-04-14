<?php

namespace App\Services\Timetable;

use App\Models\School\SchoolClass;
use App\Models\Subject;
use App\Models\Timetable\Timetable;
use Illuminate\Support\Collection;

class TimetableService
{
    /**
     * Аdd one lesson in timetable
     * @return void
     */
    public function addOneLessonToTimeTable(SchoolClass $class, Subject $subject)
    {
//        $timetable = Timetable::create([
//            'status' =>
//        ]);
    }

    //взять модель с тем что отсортировано и сформировать расписание на неделю
    public function getOneDayTimetable(Collection $timetable)
    {
        dd($timetable);
        //TODO сделать по человечески)
        $day['link'] = $timetable->link;
        $day['start_time'] = $timetable->start_time;
        $day['status'] = $timetable->status;
        $day['subjectName'] = $timetable->schoolSubject->name;

        return $day;
    }
}
