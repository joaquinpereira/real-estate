<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug'];

    public function getRouteKeyName(){
        return 'slug';
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function setTitleAttribute($title){
        $this->attributes['title'] = $title;
        $this->attributes['slug'] = Str::slug($title);
    }

    public function postPublished(){
        return $this->posts()->whereNotNull('published_at')
                    ->where('published_at','<=', Carbon::now());
    }
}
