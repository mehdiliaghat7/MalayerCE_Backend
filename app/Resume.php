<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Resume
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $file
 * @property string $type
 * @property string $create_date
 * @property string|null $update_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resume newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resume newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resume query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resume whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resume whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resume whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resume whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resume whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resume whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resume whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resume whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resume whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Resume extends Model
{
    //
}
