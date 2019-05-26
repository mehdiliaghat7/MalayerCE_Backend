<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Professor
 *
 * @property int $id
 * @property string $name
 * @property string|null $professor_id
 * @property string|null $image
 * @property string|null $resume_ids
 * @property string $type
 * @property string|null $presentTimes
 * @property string $password
 * @property string $email
 * @property string|null $degree
 * @property string|null $field
 * @property int $confirmed
 * @property string $role
 * @property string $create_date
 * @property string|null $update_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Conversation[] $conversations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Lesson[] $lessons
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor whereConfirmed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor whereDegree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor whereField($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor wherePresentTimes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor whereProfessorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor whereResumeIds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Professor whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class Professor extends Model
{




    public function conversations(): HasMany
    {
        return $this->hasMany(Conversation::class, 'professor_id');
    }

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class, 'professor_id');
    }
    public function resume():HasMany
    {
        return $this->hasMany(Resume::class , 'professor_id');
    }

}
