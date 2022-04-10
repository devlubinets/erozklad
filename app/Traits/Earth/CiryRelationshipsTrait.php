<?php

namespace App\Traits\Earth;

use App\Models\Institutions\institution;

trait CiryRelationshipsTrait
{
    public function schools()
    {
        return $this->hasMany(institution::class);
    }
}
