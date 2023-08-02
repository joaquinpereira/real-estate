<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\NearbyType
 *
 * @property int $id
 * @property string $name
 * @property string|null $tag_title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Nearby> $nearby
 * @property-read int|null $nearby_count
 * @method static \Database\Factories\NearbyTypeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|NearbyType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NearbyType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NearbyType query()
 * @method static \Illuminate\Database\Eloquent\Builder|NearbyType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NearbyType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NearbyType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NearbyType whereTagTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NearbyType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class NearbyType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'tag_title'];

    public function nearby()
    {
        return $this->hasMany(Nearby::class);
    }
}
