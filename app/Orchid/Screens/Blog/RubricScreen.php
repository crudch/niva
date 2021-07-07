<?php

namespace App\Orchid\Screens\Blog;

use App\Models\Rubric;
use Orchid\Screen\Screen;
use Orchid\Screen\Fields\Input;
use Orchid\Support\Facades\Toast;
use Orchid\Support\Facades\Layout;
use App\Http\Requests\RubricRequest;
use Orchid\Screen\Actions\ModalToggle;
use App\Orchid\Layouts\Blog\RubricLayout;

class RubricScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Рубрики';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'Рубрики блога';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'rubrics' => Rubric::filters()->orderBy('id')->paginate()
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            ModalToggle::make('Создать рубрику')
                ->icon('layers')
                ->modal('createRubric')
                ->method('create')
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            RubricLayout::class,
            // Добавить рубрику
            Layout::modal('createRubric', Layout::rows([
                Input::make('title')
                    ->required()
                    ->title('Наименование'),
                Input::make('slug')
                    ->title('URL адрес')
                    ->help('Можно оставить пустым, тогда url сформируется из Наименования')
            ]))->title('Создать рубрику')
                ->applyButton('Создать'),

            // Редактировать рубрику
            Layout::modal('editRubric', Layout::rows([
                Input::make('title')
                    ->required()
                    ->title('Наименование'),
                Input::make('slug')
                    ->title('URL адрес'),
            ]))->async('asyncGetRubric')
                ->title('Редактировать рубрику')
                ->applyButton('Сохранить')
        ];
    }

    public function asyncGetRubric(Rubric $rubric)
    {
        return [
            'title' => $rubric->title,
            'slug'  => $rubric->slug
        ];
    }

    public function create(RubricRequest $request)
    {
        Rubric::create($request->all());

        Toast::success('Рубрика создана');
    }

    public function update(Rubric $rubric, RubricRequest $request)
    {
        $rubric->update($request->all());

        Toast::success('Рубрика обновлена');
    }
}
