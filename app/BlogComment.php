<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
 * @property-read \App\Post $post
 * @property-read \App\User|null $user
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
    public function user(): BelongsTo
    {

        return $this->belongsTo(User::class, 'user_id');
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
