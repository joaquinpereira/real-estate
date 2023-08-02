<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\FilesProperty
 *
 * @property int $id
 * @property int $property_id
 * @property string $type
 * @property string $url
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\FilesPropertyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FilesProperty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FilesProperty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FilesProperty query()
 * @method static \Illuminate\Database\Eloquent\Builder|FilesProperty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FilesProperty whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FilesProperty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FilesProperty wherePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FilesProperty whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FilesProperty whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FilesProperty whereUrl($value)
 * @mixin \Eloquent
 */
class FilesProperty extends Model
{
    use HasFactory;
}
