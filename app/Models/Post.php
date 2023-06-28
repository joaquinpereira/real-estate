<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','summary','content','poster', 'slug','published_at','category_id','user_id', 'active'];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function getRouteKeyName(){
        return 'slug';
    }

    public function setTitleAttribute($title){
        $this->attributes['title'] = $title;
        $this->attributes['slug'] = Str::slug($title);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function scopePublished($query){
        return $query->whereNotNull('published_at')
                    ->where('published_at','<=', Carbon::now())
                    ->orderBy('published_at', 'desc');
    }
}
