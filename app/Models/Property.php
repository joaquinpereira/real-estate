<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'user_id',
        'category_id',
        'city_id',
        'property_type_id',
        'property_status_id',
        'title',
        'slug',
        'address',
        'description',
        'poster',
        'featured_Property',
        'property_size',
        'price',
        'status',
        'bedrooms',
        'bathrooms',
        'year_built',
        'garage',
        'garage_size',
        'location'
    ];

    public function getRouteKeyName(){
        return 'uuid';
    }

    public function features(){
        return $this->belongsToMany(Feature::class,'property_feature');
    }

    public function type()
    {
        return $this->belongsTo(PropertyType::class, 'property_type_id');
    }

    public function propertyStatus()
    {
        return $this->belongsTo(PropertyStatus::class, 'property_status_id');
    }

    public function agent()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(CategoryProperty::class, 'category_id');
    }

    public function files()
    {
        return $this->hasMany(FilesProperty::class);
    }

    public function nearbyPlaces()
    {
        return $this->hasMany(Nearby::class);
    }

    public function scopePropertiesActive($query){
        return $query->where('status','=','Active')
                    ->orderBy('created_at', 'desc');
    }

    public function scopeFeturedProperties($query){
        return $query->where('status','=','Active')
                    ->where('featured_Property','=',true)
                    ->orderBy('created_at', 'desc');
    }

    public function getPriceAttribute()
    {
        $currency = new \NumberFormatter(
            'en_US',
            \NumberFormatter::CURRENCY
        );

        return $currency->format($this->attributes['price']);
    }

    public function getPhotosAttribute()
    {
        return array_merge(
            [$this->poster],
            $this->files()->where('type', '=', 'image')->get()->pluck('url')->toArray()
        );
    }

    public function getVideosAttribute()
    {
        return $this->files()->where('type', '=', 'video')->get()->pluck('url')->toArray();
    }
}


