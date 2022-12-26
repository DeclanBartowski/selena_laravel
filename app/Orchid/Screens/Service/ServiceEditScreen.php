<?php

namespace App\Orchid\Screens\Service;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Models\ServicePrice;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\SimpleMDE;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ServiceEditScreen extends Screen
{
    /**
     * @var Service
     */
    public $service;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Service $service): iterable
    {
        return [
            'service' => $service,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->service->exists ? __('Edit') : __('Add');
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return __('platform.services.name');
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Add'))
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->service->exists),
            Button::make(__('Save'))
                ->icon('check')
                ->method('createOrUpdate')
                ->canSee($this->service->exists),
            Button::make(__('Remove'))
                ->icon('trash')
                ->method('remove')
                ->canSee($this->service->exists),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('service.id')
                    ->readonly()
                    ->hidden(),
                Input::make('service.name')
                    ->title(__('admin_services.name'))
                    ->required(),
                Input::make('service.code')
                    ->title(__('admin_services.code'))
                    ->required(),
                Input::make('service.sort')
                    ->title(__('platform.entity.sort'))
                    ->type('number')
                    ->value(500),
                CheckBox::make('service.active')
                    ->sendTrueOrFalse()
                    ->title(__('admin_services.active'))
                    ->value(true),
                Relation::make('service.services')
                    ->fromModel(ServicePrice::class, 'name')
                    ->multiple()
                    ->title(__('admin_services.service_prices')),
                Picture::make('service.preview_picture')
                    ->title(__('admin_services.preview_picture')),
                SimpleMDE::make('service.preview_content')
                    ->title(__('admin_services.preview_content')),
                Picture::make('service.detail_picture')
                    ->title(__('admin_services.detail_picture')),
                SimpleMDE::make('service.detail_content')
                    ->title(__('admin_services.detail_content')),
                Picture::make('service.main_picture')
                    ->title(__('admin_services.main_picture')),
                SimpleMDE::make('service.main_content')
                    ->title(__('admin_services.main_content')),
            ])
        ];
    }

    /**
     * @param ServiceRequest $request
     * @param Service $service
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(ServiceRequest $request, Service $service)
    {
        $data = $request->validated('service');

        if (!isset($data['services'])) $data['services'] = null;

        $service->fill($data)->save();

        Toast::info(__('platform.entity.saved'));

        return redirect()->route('platform.service.list');
    }

    /**
     * @param Service $service
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     *
     */
    public function remove(Service $service)
    {
        $service->delete();

        Toast::info(__('platform.entity.removed'));

        return redirect()->route('platform.service.list');
    }
}
