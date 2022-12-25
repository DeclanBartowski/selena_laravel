<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\FormResult;

use App\Models\FormResult;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class FormResultListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'form_result';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id', __('admin_form_results.ID'))->render(fn(FormResult $formResult) => Link::make((string)$formResult->id)
                ->route('platform.form_results.edit', $formResult->id)),
            TD::make('title', __('admin_form_results.title')),
            TD::make('name', __('admin_form_results.name')),
            TD::make('phone', __('admin_form_results.phone')),
            TD::make('email', __('admin_form_results.email')),

        ];
    }
}
