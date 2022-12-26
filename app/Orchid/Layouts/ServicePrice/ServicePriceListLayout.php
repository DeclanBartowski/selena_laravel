<?php

namespace App\Orchid\Layouts\ServicePrice;

use App\Models\ServicePrice;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ServicePriceListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'service_prices';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('id', __('admin_service_prices.ID'))->render(fn(ServicePrice $servicePrice) => Link::make((string)$servicePrice->id)
        ->route('platform.service_price.edit', $servicePrice->id)),
            TD::make('name', __('admin_service_prices.name')),
            TD::make('price', __('admin_service_prices.price')),
        ];
    }
}
