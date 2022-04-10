<?php

namespace App\Models\Institutions;

use App\Traits\Institutions\InstitutionRelationshipsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\institution
 *
 * @property int $id
 * @property string $name
 * @property int $city_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|institution newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|institution newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|institution query()
 * @method static \Illuminate\Database\Eloquent\Builder|institution whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|institution whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|institution whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|institution whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|institution whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Institution extends Model
{
    use HasFactory,
        InstitutionRelationshipsTrait;
}
