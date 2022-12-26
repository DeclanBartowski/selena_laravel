<?php

namespace App\Orchid\Screens\ServicePrice;

use App\Models\ServicePrice;
use App\Orchid\Layouts\ServicePrice\ServicePriceListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class ServicePriceListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'service_prices' => ServicePrice::filters()->defaultSort('id')->paginate(),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
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
            Link::make(__('Add'))
                ->icon('plus')
                ->href(route('platform.service_price.edit')),
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
            ServicePriceListLayout::class
        ];
    }
}
