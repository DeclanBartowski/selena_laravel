<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Social;

use App\Models\Social;
use Orchid\Platform\Models\Role;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class SocialListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'social';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id', "ID")
                ->sort()->filter(Input::make()),
            TD::make('name', __('Name'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(fn(Social $social) => Link::make($social->name)
                    ->route('platform.social.edit', $social->id)),
            TD::make('active', __('platform.entity.active'))
                ->sort()->filter(Input::make()),
            TD::make('sort', __('platform.entity.sort'))
                ->sort()->filter(Input::make()),
            TD::make('link', __('URL')),
            TD::make('created_at', __('Created'))
                ->sort()
                ->render(fn(Social $social) => $social->created_at->toDateTimeString()),
        ];
    }
}
