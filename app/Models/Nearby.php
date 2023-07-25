<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
