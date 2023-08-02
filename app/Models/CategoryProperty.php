<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CategoryProperty
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CategoryPropertyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProperty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProperty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProperty query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProperty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProperty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProperty whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProperty whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProperty whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CategoryProperty extends Model
{
    use HasFactory;

    public function getRouteKeyName(){
        return 'slug';
    }


}
