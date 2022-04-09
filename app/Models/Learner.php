<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Learner
 *
 * @property int $id
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\LearnerFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Learner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Learner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Learner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Learner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Learner whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Learner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Learner whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Learner whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Learner whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Learner extends Model
{
    use HasFactory;
}
