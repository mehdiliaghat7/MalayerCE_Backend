<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Quote
 *
 * @property int $id
 * @property string $author
 * @property string $quote
 * @property string $create_date
 * @property string|null $update_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quote query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quote whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quote whereCreateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quote whereQuote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quote whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Quote whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Quote extends Model
{
    //
}
