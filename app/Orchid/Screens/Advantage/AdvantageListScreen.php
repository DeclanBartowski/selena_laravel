<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Advantage;

use App\Models\Advantage;
use App\Orchid\Layouts\Advantage\AdvantageListLayout;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;


class AdvantageListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
       return [
           'advantage' => Advantage::filters()->defaultSort('id')->paginate(),
       ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return __('platform.advantage.name');
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
            Link::make(__('Add'))
                ->icon('plus')
                ->href(route('platform.advantages.edit')),
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
            AdvantageListLayout::class,
        ];
    }
}
