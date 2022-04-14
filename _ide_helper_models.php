<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\City
 *
 * @property int $id
 * @property string $name
 * @property int $region_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CityFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\City query()
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\City whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\City whereUpdatedAt($value)
 */
	class City extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Country
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CountryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\Country whereUpdatedAt($value)
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
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
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Learner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Learner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Learner query()
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Learner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Learner whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Learner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Learner whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Learner whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Learner whereUpdatedAt($value)
 */
	class Learner extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Region
 *
 * @property int $id
 * @property string $name
 * @property int $country_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\RegionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\Region query()
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\Region whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\Region whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\Region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\Region whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Earth\Region whereUpdatedAt($value)
 */
	class Region extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RuleEducationProcess
 *
 * @property int $id
 * @property string $even_odd
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\RuleEducationProcessFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Rule\RuleEducationProcess newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rule\RuleEducationProcess newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rule\RuleEducationProcess query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rule\RuleEducationProcess whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rule\RuleEducationProcess whereEvenOdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rule\RuleEducationProcess whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rule\RuleEducationProcess whereUpdatedAt($value)
 */
	class RuleEducationProcess extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SchoolClass
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SchoolClassFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\SchoolClass newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\SchoolClass newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\SchoolClass query()
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\SchoolClass whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\SchoolClass whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\SchoolClass whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\SchoolClass whereUpdatedAt($value)
 */
	class SchoolClass extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Subject
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SubjectFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Subject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Subject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Subject query()
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Subject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Subject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Subject whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Subject whereUpdatedAt($value)
 */
	class Subject extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Teacher
 *
 * @property int $id
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TeacherFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Teacher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Teacher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Teacher query()
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Teacher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Teacher whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Teacher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Teacher whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Teacher whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|App\Traits\School\Teacher whereUpdatedAt($value)
 */
	class Teacher extends \Eloquent {}
}

namespace App\Models{
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
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable\Timetable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable\Timetable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable\Timetable query()
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable\Timetable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable\Timetable whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable\Timetable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable\Timetable whereInstitutionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable\Timetable whereRuleEducationProcessId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable\Timetable whereSchoolClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable\Timetable whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable\Timetable whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable\Timetable whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Timetable\Timetable whereUpdatedAt($value)
 */
	class Timetable extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property array|null $permissions
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Orchid\Platform\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|User averageByDays(string $value, $startDate = null, $stopDate = null, ?string $dateColumn = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User byAccess(string $permitWithoutWildcard)
 * @method static \Illuminate\Database\Eloquent\Builder|User byAnyAccess($permitsWithoutWildcard)
 * @method static \Illuminate\Database\Eloquent\Builder|User countByDays($startDate = null, $stopDate = null, ?string $dateColumn = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User countForGroup(string $groupColumn)
 * @method static \Illuminate\Database\Eloquent\Builder|User defaultSort(string $column, string $direction = 'asc')
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User filters(?\Orchid\Filters\HttpFilter $httpFilter = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User filtersApply(iterable $filters = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User filtersApplySelection($selection)
 * @method static \Illuminate\Database\Eloquent\Builder|User maxByDays(string $value, $startDate = null, $stopDate = null, ?string $dateColumn = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User minByDays(string $value, $startDate = null, $stopDate = null, ?string $dateColumn = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User sumByDays(string $value, $startDate = null, $stopDate = null, ?string $dateColumn = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User valuesByDays(string $value, $startDate = null, $stopDate = null, string $dateColumn = 'created_at')
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermissions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\institution
 *
 * @property int $id
 * @property string $name
 * @property int $city_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Institutions\institution newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Institutions\institution newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Institutions\institution query()
 * @method static \Illuminate\Database\Eloquent\Builder|Institutions\institution whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institutions\institution whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institutions\institution whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institutions\institution whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Institutions\institution whereUpdatedAt($value)
 */
	class institution extends \Eloquent {}
}

