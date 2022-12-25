<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Advantage;

use App\Models\Advantage;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class AdvantageListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'advantage';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id', __('admin_advantages.ID'))->render(fn(Advantage $advantage) => Link::make((string)$advantage->id)
                ->route('platform.advantages.edit', $advantage->id)),
            TD::make('name', __('admin_advantages.name')),
            TD::make('sort', __('admin_advantages.sort')),

        ];
    }
}
