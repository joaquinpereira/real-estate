<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NearbyType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'tag_title'];

    public function nearby()
    {
        return $this->hasMany(Nearby::class);
    }
}
