<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Message
 *
 * @property int $id
 * @property int $conversation_id
 * @property string $sender
 * @property int $isRead
 * @property int $isFile
 * @property string $body
 * @property string $create_date
 * @property string|null $update_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereConversationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereIsFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereSender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Message whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Message extends Model
{
    public function conversation()
    {
        return $this->belongsTo('app\conversation');
    }
}
