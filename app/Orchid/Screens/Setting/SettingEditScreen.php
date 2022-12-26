<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Setting;


use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class SettingEditScreen extends Screen
{
    /**
     * @var Setting
     */
    public $setting;

    /**
     * Query data.
     *
     * @param Setting $setting
     *
     * @return array
     */
    public function query(Setting $setting): iterable
    {
        return [
            'setting' => $setting,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->setting->exists ? __('Edit') : __('Add');
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return __('platform.setting.name');
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
       return  [
           Button::make(__('Add'))
               ->icon('pencil')
               ->method('createOrUpdate')
               ->canSee(! $this->setting->exists),
           Button::make(__('Save'))
               ->icon('check')
               ->method('createOrUpdate')
               ->canSee($this->setting->exists),
           Button::make(__('Remove'))
               ->icon('trash')
               ->method('remove')
               ->canSee($this->setting->exists),
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
            Layout::rows([
                Input::make('setting.id')->readonly()->hidden(),
                Input::make('setting.name')->title(__('admin_setting.name')),
                Input::make('setting.code')->title(__('admin_setting.code')),
                Input::make('setting.value')->title(__('admin_setting.value')),
            ])
        ];
    }

    /**
     * @param SettingRequest $settingRequest
     * @param Setting $setting
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(SettingRequest $settingRequest, Setting $setting)
    {
        $setting->fill($settingRequest->validated('setting'));
        $setting->save();
        Toast::info(__('platform.entity.saved'));
        return redirect()->route('platform.setting.list');
    }


    /**
     * @param Setting $setting
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     *
     */
    public function remove(Setting $setting)
    {
        $setting->delete();
        Toast::info(__('platform.entity.removed'));
        return redirect()->route('platform.setting.list');
    }

}
