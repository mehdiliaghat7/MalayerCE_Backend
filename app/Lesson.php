<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Lesson
 *
 * @property int $id
 * @property int $professor_id
 * @property string $lesson_id
 * @property string $title
 * @property string|null $file_ids
 * @property string $group
 * @property string $type
 * @property string $unit
 * @property string $classTimes
 * @property string|null $examDate
 * @property int $capacity
 * @property int $remained
 * @property string|null $location
 * @property string $create_date
 * @property string|null $update_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Conversation[] $conversations
 * @property-read \App\Professor $professor
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Request[] $requests
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereClassTimes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereExamDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereFileIds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereLessonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereProfessorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereRemained($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Lesson extends Model
{
    public function conversations(): HasMany
    {
        return $this->hasMany(Conversation::class, 'lesson_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'lesson_id');
    }

    public function requests(): HasMany
    {
        return $this->hasMany(Request::class, 'lesson_id');
    }
    public function lessonsFiles()
    {
        return $this->hasMany(LessonFile::class ,'lesson_id');
    }

    public function professor(): BelongsTo
    {
        return $this->belongsTo(Professor::class, 'professor_id');
    }
}
