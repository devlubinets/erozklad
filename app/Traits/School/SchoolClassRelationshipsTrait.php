<?php

namespace App\Traits\School;

use App\Models\Institutions\Institution;
use App\Models\School\Learner;
use App\Models\Timetable\Timetable;

trait SchoolClassRelationshipsTrait
{
    public function institution()
    {
        return $this->hasOne(Institution::class);
    }
    public function learners()
    {
        return $this->hasMany(Learner::class);
    }

    public function timetable()
    {
        return $this->hasMany(Timetable::class);
    }
}
