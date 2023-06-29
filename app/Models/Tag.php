<?php

namespace App\Models;

use Carbon\Carbon;
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

    public function postPublished(){
        return $this->posts()->whereNotNull('published_at')
                    ->where('published_at','<=', Carbon::now());
    }
}
