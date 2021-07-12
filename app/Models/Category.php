<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property int $parent_id
 * @property string|null $icon
 * @property string $title
 * @property string $description
 * @property string $slug
 * @property string $full_url
 * @property array $breadcrumbs
 * @property int $sort
 * @property-read Collection|Category[] $children
 * @property-read int|null $children_count
 * @property-read Category $parent
 * @method static Builder|Category newModelQuery()
 * @method static Builder|Category newQuery()
 * @method static Builder|Category query()
 * @method static Builder|Category whereBreadcrumbs($value)
 * @method static Builder|Category whereDescription($value)
 * @method static Builder|Category whereFullUrl($value)
 * @method static Builder|Category whereIcon($value)
 * @method static Builder|Category whereId($value)
 * @method static Builder|Category whereParentId($value)
 * @method static Builder|Category whereSlug($value)
 * @method static Builder|Category whereSort($value)
 * @method static Builder|Category whereTitle($value)
 * @mixin Eloquent
 * @method static Builder|Category sorted()
 */
class Category extends Model
{
    /**
     * @var string
     */
    protected $table = 'categories';

    /**
     * @var string[]
     */
    protected $fillable = [
        'parent_id',
        'icon',
        'title',
        'description',
        'slug',
        'full_url',
        'breadcrumbs',
        'sort'
    ];

    /**
     *
     * @var array
     */
    protected $casts = [
        'breadcrumbs' => 'array',
    ];

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * Получаем дерево категорий
     * @return array
     */
    public static function getTreeCategories()
    {
        $categories = parent::all(['id', 'parent_id', 'full_url', 'title'])
            ->keyBy('id')
            ->toArray();

        $tree = [];

        foreach ($categories as $id => &$node) {
            if (!$node['parent_id']) {
                $tree[$id] = &$node;
                continue;
            }
            $categories[$node['parent_id']]['children'][$node['id']] = &$node;
        }

        unset($node);

        return $tree;
    }

    /**
     * @return BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(static::class, 'parent_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function children()
    {
        return $this->hasMany(static::class, 'parent_id', 'id');
    }

    /**
     * @param Builder $query
     *
     * @return Builder
     */
    public function scopeSorted(Builder $query)
    {
        return $query->orderBy('sort');
    }
}
