<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Cabinet;

use App\Models\Cabinet;
use App\Orchid\Layouts\Cabinet\CabinetListLayout;
use Orchid\Screen\Action;
use Orchid\Screen\Screen;


class CabinetListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
       return [
           'cabinet' => Cabinet::filters()->defaultSort('id')->paginate(),
       ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return __('platform.cabinet.name');
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return __('platform.entity.list');
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [

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
            CabinetListLayout::class,
        ];
    }
}
