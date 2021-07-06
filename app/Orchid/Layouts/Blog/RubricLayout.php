<?php

namespace App\Orchid\Layouts\Blog;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class RubricLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'rubrics';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('id', 'Id')->width('100px')->sort(),
            TD::make('title', 'Title')->width('250px')->filter(TD::FILTER_TEXT),
            TD::make('slug', 'Slug'),
        ];
    }
}
