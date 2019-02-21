<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\BlogComment
 *
 * @property int $id
 * @property int $post_id
 * @property int|null $user_id
 * @property string $body
 * @property string|null $answer
 * @property string $name
 * @property string|null $email
 * @property int $confirmed
 * @property int $seen
 * @property string $create_date
 * @property string|null $update_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogComment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogComment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogComment whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogComment whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogComment whereConfirmed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogComment whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogComment whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogComment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogComment wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogComment whereSeen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogComment whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogComment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BlogComment whereUserId($value)
 * @mixin \Eloquent
 */
class BlogComment extends Model
{
    public function user()
    {
        return $this->belongsTo('app\user');
    }
    public function post()
    {
        return $this->belongsTo('app\post');
    }
}
