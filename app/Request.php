<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Request
 *
 * @property int $id
 * @property int $user_id
 * @property int $lesson_id
 * @property string $create_date
 * @property string|null $update_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Request newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Request newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Request query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Request whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Request whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Request whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Request whereLessonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Request whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Request whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Request whereUserId($value)
 * @mixin \Eloquent
 */
class Request extends Model
{
    public function user()
    {
        return $this->belongsTo('app\user');
    }
    public function lesson()
    {
        return $this->belongsTo('app\lesson');
    }
}
