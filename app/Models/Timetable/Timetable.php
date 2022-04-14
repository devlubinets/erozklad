<?php

namespace App\Models\Timetable;

use App\Traits\Timetable\TimetableRelationshipsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Timetable
 *
 * @property int $id
 * @property int $institution_id
 * @property int $school_class_id
 * @property int $subject_id
 * @property int $rule_education_process_id
 * @property string $day
 * @property string $start_time
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TimetableFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable query()
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable whereInstitutionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable whereRuleEducationProcessId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable whereSchoolClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Timetable extends Model
{
    use HasFactory,
        TimetableRelationshipsTrait;
}
