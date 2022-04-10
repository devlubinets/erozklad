<?php

namespace App\Traits\School;

use App\Models\School\SchoolClass;

trait LearnerRelationshipsTrait
{
    public function class()
    {
        return $this->hasOne(SchoolClass::class);
    }
}
