<?php

namespace App\Models\Rule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RuleEducationProcess
 *
 * @property int $id
 * @property string $even_odd
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\RuleEducationProcessFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|RuleEducationProcess newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RuleEducationProcess newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RuleEducationProcess query()
 * @method static \Illuminate\Database\Eloquent\Builder|RuleEducationProcess whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RuleEducationProcess whereEvenOdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RuleEducationProcess whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RuleEducationProcess whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RuleEducationProcess extends Model
{
    use HasFactory;
}
