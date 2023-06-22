<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName(){
        return 'slug';
    }

    public function posts(){
        return $this->belongsToMany(Post::class);
    }

    public function setNameAttribute($title){
        $this->attributes['title'] = $title;
        $this->attributes['slug'] = Str::slug($title);
    }

}
