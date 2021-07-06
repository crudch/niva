<?php

namespace App\Orchid\Layouts\Blog;

use App\Models\Rubric;
use Orchid\Screen\TD;
use Illuminate\Support\Str;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\ModalToggle;

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
            TD::make('id', 'Id')
                ->width('100px')
                ->sort(),

            TD::make('title', 'Title')
                ->width('250px')
                ->filter(TD::FILTER_TEXT),

            TD::make('slug', 'Slug'),

            TD::make('actions')
                ->align(TD::ALIGN_RIGHT)
                ->render(static function (Rubric $rubric) {
                    return ModalToggle::make('')
                        ->icon('pencil')
                        ->modal('editRubric')
                        ->method('update')
                        ->modalTitle('Рубрика: ' . Str::limit($rubric->title, 25))
                        ->asyncParameters([
                            'rubric' => $rubric->slug
                        ]);
                })
        ];
    }
}
