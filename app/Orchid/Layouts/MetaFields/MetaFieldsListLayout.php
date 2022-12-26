<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\MetaFields;

use App\Models\MetaField;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class MetaFieldsListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'meta_field';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id', __('admin_meta_fields.ID'))->render(fn(MetaField $metaField) => Link::make((string)$metaField->id)
                ->route('platform.meta_fields.edit', $metaField->id)),
            TD::make('route', __('admin_meta_fields.route')),
            TD::make('title', __('admin_meta_fields.title')),
            TD::make('keywords', __('admin_meta_fields.keywords')),
            TD::make('description', __('admin_meta_fields.description')),

        ];
    }
}
