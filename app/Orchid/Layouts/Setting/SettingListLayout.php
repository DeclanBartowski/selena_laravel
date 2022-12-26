<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Setting;

use App\Models\Setting;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class SettingListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'setting';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id', __('admin_setting.ID'))->render(fn(Setting $setting) => Link::make((string)$setting->id)
                ->route('platform.setting.edit', $setting->id)),
            TD::make('name', __('admin_setting.name')),
            TD::make('code', __('admin_setting.code')),
            TD::make('value', __('admin_setting.value')),
        ];
    }
}
