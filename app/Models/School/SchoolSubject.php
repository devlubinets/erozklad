<?php

namespace App\Models\School;

use App\Traits\School\SchoolSubjectRelationshipsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SchoolSubject
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SchoolSubjectFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolSubject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolSubject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolSubject query()
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolSubject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolSubject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolSubject whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SchoolSubject whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SchoolSubject extends Model
{
    use HasFactory,
        SchoolSubjectRelationshipsTrait;
}
