<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Advantage;

use App\Http\Requests\AdvantageRequest;
use App\Http\Requests\ContactRequest;
use App\Models\Advantage;
use App\Models\Contact;
use App\Models\Social;
use App\Orchid\Layouts\Role\RoleEditLayout;
use App\Orchid\Layouts\Role\RolePermissionLayout;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Platform\Models\Role;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\SimpleMDE;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class AdvantageEditScreen extends Screen
{
    /**
     * @var Advantage
     */
    public $advantage;

    /**
     * Query data.
     *
     * @param Advantage $advantage
     *
     * @return array
     */
    public function query(Advantage $advantage): iterable
    {
        return [
            'advantage' => $advantage,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->advantage->exists ? __('Edit') : __('Add');
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return __('platform.advantage.name');
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
       return  [
           Button::make(__('Add'))
               ->icon('pencil')
               ->method('createOrUpdate')
               ->canSee(! $this->advantage->exists),
           Button::make(__('Save'))
               ->icon('check')
               ->method('createOrUpdate')
               ->canSee($this->advantage->exists),
       ];
    }

    /**
     * Views.
     *
     * @return string[]|\Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('advantage.id')->readonly()->hidden(),
                Input::make('advantage.name')->title(__('admin_advantages.name')),
                CheckBox::make('advantage.active')->sendTrueOrFalse()->title(__('admin_advantages.active')),
                Input::make('advantage.sort')->type('number')->title(__('admin_advantages.sort')),
                Picture::make('advantage.preview')->title(__('admin_advantages.preview')),
                SimpleMDE::make('advantage.content')->title(__('admin_advantages.content')),
            ])
        ];
    }

    /**
     * @param AdvantageRequest $advantageRequest
     * @param Advantage $advantage
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(AdvantageRequest $advantageRequest, Advantage $advantage)
    {
        $advantage->fill($advantageRequest->validated('advantage'));
        $advantage->save();
        Toast::info(__('platform.entity.saved'));
        return redirect()->route('platform.advantage.list');
    }

}
