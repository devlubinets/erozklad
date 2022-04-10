<?php

namespace App\Traits\Earth;

use App\Models\Earth\City;

trait RegionRelationshipsTrait
{
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
