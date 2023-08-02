<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Nearby
 *
 * @property int $id
 * @property int $property_id
 * @property int $nearby_type_id
 * @property string $title
 * @property string|null $location
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $nearby
 * @property-read \App\Models\Property $property
 * @property-read \App\Models\NearbyType $type
 * @method static \Database\Factories\NearbyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Nearby newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Nearby newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Nearby query()
 * @method static \Illuminate\Database\Eloquent\Builder|Nearby whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nearby whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nearby whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nearby whereNearbyTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nearby wherePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nearby whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nearby whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Nearby extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'location', 'property_id', 'nearby_type_id'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function type()
    {
        return $this->belongsTo(NearbyType::class, 'nearby_type_id');
    }

    public function getNearbyAttribute()
    {
        return $this->attributes['title'] .' '.$this->type->tag_title;
    }
}
