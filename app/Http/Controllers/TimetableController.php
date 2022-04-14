<?php

namespace App\Http\Controllers;

use App\Models\Timetable\Timetable;
use App\Services\Timetable\TimetableService;
use Illuminate\Support\Carbon;

class TimetableController extends Controller
{
    public function index()
    {
//        $days = Timetable::all();
//
//        return view('timetable',['timetable' => $timetable]);
    }

    public function show()
    {
        //TODO  добавить выбор дня
//        $day = (new TimetableService())->getOneDayTimetable(Timetable::all());
        $timetable = Timetable::all();
        $day = new  Carbon($timetable->first());
        return view('timetable',[
            'timetable' => Timetable::all(),
            'day' => $day->weekday()
        ]);
    }
}
