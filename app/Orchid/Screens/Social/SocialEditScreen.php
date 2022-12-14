<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Social;

use App\Models\Social;
use App\Orchid\Layouts\Role\RoleEditLayout;
use App\Orchid\Layouts\Role\RolePermissionLayout;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Platform\Models\Role;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class SocialEditScreen extends Screen
{
    /**
     * @var Social
     */
    public $social;

    /**
     * Query data.
     *
     * @param Social $social
     *
     * @return array
     */
    public function query(Social $social): iterable
    {
        return [
            'social' => $social,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->social->exists ? __('Edit') : __('Add');
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return __('platform.social.name');
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Add'))
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(! $this->social->exists),

            Button::make(__('Save'))
                ->icon('check')
                ->method('createOrUpdate')
                ->canSee($this->social->exists),

            Button::make(__('Remove'))
                ->icon('trash')
                ->method('remove')
                ->canSee($this->social->exists),
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
            Input::make('social.id')->readonly()->hidden(),
            Input::make('social.name')->title(__('Name')),
            CheckBox::make('social.active')->sendTrueOrFalse()->title(__('platform.entity.active')),
            Input::make('social.sort')->title(__('platform.entity.sort')),
            Input::make('social.link')->title(__('URL')),
            Picture::make('social.icon')->title(__('platform.entity.icon')),
            ])
        ];
    }

    /**
     * @param Request $request
     * @param Social $social
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Request $request, Social $social)
    {
        $request->validate([
            'social.sort' => [
                'required',
            ],
            'social.name' => [
                'required',
            ],
            'social.icon' => [
                'required',
            ],
            'social.link' => [
                'required',
            ],
        ]);

        $social->fill($request->get('social'));

        $social->save();

        Toast::info(__('platform.entity.saved'));

        return redirect()->route('platform.social.list');
    }

    /**
     * @param Social $social
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     *
     */
    public function remove(Social $social)
    {
        $social->delete();

        Toast::info(__('platform.entity.removed'));

        return redirect()->route('platform.social.list');
    }
}
