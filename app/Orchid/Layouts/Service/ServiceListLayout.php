<?php

namespace App\Orchid\Layouts\Service;

use App\Models\Service;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ServiceListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'services';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('id', __('admin_services.ID'))->render(fn(Service $service) => Link::make((string)$service->id)
        ->route('platform.service.edit', $service->id)),
            TD::make('name', __('admin_services.name')),
        ];
    }
}
