<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\LessonFile
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string $file
 * @property string $type
 * @property string $status
 * @property string $create_date
 * @property string|null $update_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LessonFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LessonFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LessonFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LessonFile whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LessonFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LessonFile whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LessonFile whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LessonFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LessonFile whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LessonFile whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LessonFile whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LessonFile whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LessonFile whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LessonFile extends Model
{
    //
}
