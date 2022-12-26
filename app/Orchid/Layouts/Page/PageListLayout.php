<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Page;

use App\Models\Page;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class PageListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'page';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id', __('admin_page.ID'))->render(fn(Page $page) => Link::make((string)$page->id)
                ->route('platform.page.edit', $page->id)),
            TD::make('active', __('admin_page.active'))->render(fn(Page $page) => ($page->active) ? 'Y' : 'N'),
            TD::make('code', __('admin_page.code')),
            TD::make('title', __('admin_page.title')),
            TD::make('content', __('admin_page.content'))->render(fn(Page $page) => $page->content),
        ];
    }
}
