<?php

namespace App\Traits\Earth;

use App\Models\Earth\Region;

trait CountryRelationshipsTrait
{
    public function regions()
    {
        return $this->hasMany(Region::class);
    }
}
