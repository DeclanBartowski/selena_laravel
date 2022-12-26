<?php

namespace App\Orchid\Screens\ServicePrice;

use App\Http\Requests\ServicePriceRequest;
use App\Models\ServicePrice;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ServicePriceEditScreen extends Screen
{
    /**
     * @var ServicePrice
     */
    public $service_price;


    /**
     * Query data.
     *
     * @param ServicePrice $service_price
     *
     * @return array
     */
    public function query(ServicePrice $service_price): iterable
    {
        return [
            'service_price' => $service_price,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->service_price->exists ? __('Edit') : __('Add');
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return __('platform.service_prices.name');
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
                ->canSee(!$this->service_price->exists),
            Button::make(__('Save'))
                ->icon('check')
                ->method('createOrUpdate')
                ->canSee($this->service_price->exists),
            Button::make(__('Remove'))
                ->icon('trash')
                ->method('remove')
                ->canSee($this->service_price->exists),
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
                Input::make('service_price.id')
                    ->readonly()
                    ->hidden(),
                Input::make('service_price.name')
                    ->title(__('admin_service_prices.name'))
                    ->required(),
                Input::make('service_price.code')
                    ->title(__('admin_services.code'))
                    ->required(),
                CheckBox::make('service_price.active')
                    ->sendTrueOrFalse()
                    ->value(true)
                    ->title(__('admin_services.active')),
                Input::make('service_price.price')
                    ->title(__('admin_service_prices.price'))
                    ->required()
                    ->type('number'),
                TextArea::make('service_price.description')
                    ->title(__('admin_service_prices.description'))
                    ->rows(5),
            ])
        ];
    }

    /**
     * @param ServicePriceRequest $request
     * @param ServicePrice $servicePrice
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(ServicePriceRequest $request, ServicePrice $servicePrice)
    {
        $servicePrice->fill($request->validated('service_price'))->save();

        Toast::info(__('platform.entity.saved'));

        return redirect()->route('platform.service_price.list');
    }

    /**
     * @param ServicePrice $servicePrice
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     *
     */
    public function remove(ServicePrice $servicePrice)
    {
        $servicePrice->delete();

        Toast::info(__('platform.entity.removed'));

        return redirect()->route('platform.service_price.list');
    }
}
