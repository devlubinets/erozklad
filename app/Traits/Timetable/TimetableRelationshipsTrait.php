<?php

namespace App\Traits\Timetable;

use App\Models\School\SchoolSubject;

trait TimetableRelationshipsTrait
{
    public function schoolSubject()
    {
        return $this->belongsTo(SchoolSubject::class);
    }
}
