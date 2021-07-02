<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Rubric
 *
 * @property int    $id
 * @property string $title
 * @property string $slug
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric query()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Article[] $articles
 * @property-read int|null $articles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rubric whereTitle($value)
 */
class Rubric extends Model
{
    /**
     * @var string
     */
    protected $table = 'rubrics';

    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'slug'
    ];

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany(Article::class, 'rubric_id', 'id');
    }
}
