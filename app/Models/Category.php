<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
        'title',
        'slug',
        'full_url',
        'breadcrumbs',
        'icon',
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(static::class, 'parent_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(static::class, 'parent_id', 'id');
    }
}
