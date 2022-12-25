<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Cabinet;

use App\Models\Cabinet;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CabinetListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'cabinet';

    /**
     * @return TD[]
     */
    public function columns(): array
    {

        return [
            TD::make('id', __('admin_cabinets.ID'))->render(fn(Cabinet $cabinet) => Link::make((string)$cabinet->id)
                ->route('platform.cabinets.edit', $cabinet->id)),

            TD::make('name', __('admin_cabinets.name')),
            TD::make('children_area_value', __('admin_cabinets.children_area_value')),
            TD::make('children_area_description', __('admin_cabinets.children_area_description'))->render(fn(
                Cabinet $cabinet
            ) => $cabinet->children_area_description),
            TD::make('cabinet_value', __('admin_cabinets.cabinet_value')),
            TD::make('cabinet_description', __('admin_cabinets.cabinet_description'))->render(fn(
                Cabinet $cabinet
            ) => $cabinet->cabinet_description),
            TD::make('session_value', __('admin_cabinets.session_value')),
            TD::make('session_description', __('admin_cabinets.session_description'))->render(fn(
                Cabinet $cabinet
            ) => $cabinet->session_description),
            TD::make('photo', __('admin_cabinets.photo'))->render(function (Cabinet $cabinet) {
                return (!empty($cabinet->photo)) ? implode(',', $cabinet->photo) : '';
            })->width(200),
            TD::make('preview', __('admin_cabinets.preview'))->width(200),
        ];
    }
}
