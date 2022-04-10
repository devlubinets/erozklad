<?php

namespace App\Traits\Institutions;

use App\Traits\School\SchoolClass;

trait InstitutionRelationshipsTrait
{
    public function classes()
    {
        return $this->hasMany(SchoolClass::class);
    }
}
