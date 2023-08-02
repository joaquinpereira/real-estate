<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PropertyStatus
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PropertyStatusFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyStatus whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PropertyStatus extends Model
{
    use HasFactory;
}
