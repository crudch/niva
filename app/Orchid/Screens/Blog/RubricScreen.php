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
            ModalToggle::make('Добавить рубрику')
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
            Layout::modal('createRubric', Layout::rows([
                Input::make('title')->required()->title('Наименование'),
                Input::make('slug')->title('URL адрес')
            ]))->title('Создать рубрику')
                ->applyButton('Создать')
        ];
    }

    public function create(RubricRequest $request)
    {
        dd($request->all());

        Toast::info('Рубрика создана');
    }
}
