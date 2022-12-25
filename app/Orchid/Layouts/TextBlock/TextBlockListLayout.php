<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\TextBlock;

use App\Models\TextBlock;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class TextBlockListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'text_block';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id', __('admin_text_blocks.ID'))->render(fn(TextBlock $text_block) => Link::make((string)$text_block->id)
                ->route('platform.text_blocks.edit', $text_block->id)),
            TD::make('name', __('admin_text_blocks.name')),
            TD::make('code', __('admin_text_blocks.code')),

        ];
    }
}
