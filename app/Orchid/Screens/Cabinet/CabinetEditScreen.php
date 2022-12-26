<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Cabinet;

use App\Http\Requests\CabinetRequest;
use App\Models\Cabinet;
use App\Models\Contact;
use App\Orchid\Fields\UploadsJson;
use Illuminate\Support\Facades\Storage;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\SimpleMDE;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class CabinetEditScreen extends Screen
{
    /**
     * @var Cabinet
     */
    public $cabinet;

    /**
     * Query data.
     *
     * @param Cabinet $cabinet
     *
     * @return array
     */
    public function query(Cabinet $cabinet): iterable
    {
        return [
            'cabinet' => $cabinet,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->cabinet->exists ? __('Edit') : __('Add');
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return __('platform.cabinet.name');
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Save'))
                ->icon('check')
                ->method('createOrUpdate')
                ->canSee($this->cabinet->exists),
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
                Input::make('cabinet.id')->readonly()->hidden(),
                Input::make('cabinet.name')->title(__('admin_cabinets.name')),
                Group::make([
                    Input::make('cabinet.children_area_value')->title(__('admin_cabinets.children_area_value')),
                    SimpleMDE::make('cabinet.children_area_description')->title(__('admin_cabinets.children_area_description')),
                ]),
                Group::make([
                    Input::make('cabinet.cabinet_value')->title(__('admin_cabinets.cabinet_value')),
                    SimpleMDE::make('cabinet.cabinet_description')->title(__('admin_cabinets.cabinet_description')),
                ]),
                Group::make([
                    Input::make('cabinet.session_value')->title(__('admin_cabinets.session_value')),
                    SimpleMDE::make('cabinet.session_description')->title(__('admin_cabinets.session_description')),
                ]),
                SimpleMDE::make('cabinet.preview')->title(__('admin_cabinets.preview')),
                UploadsJson::make('cabinet.photo'),
            ])
        ];
    }

    /**
     * @param CabinetRequest $contactRequest
     * @param Contact $contact
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(CabinetRequest $cabinetRequest, Cabinet $cabinet)
    {

        $photo = [];
        $cabinetInfo = $cabinetRequest->validated('cabinet');

        if (isset($cabinetInfo['photo']['old_src']) && !empty($cabinetInfo['photo']['old_src'])) {
            $photo = $cabinetInfo['photo']['old_src'];
        }

        if (isset($cabinetInfo['photo']['new_src']) && !empty($cabinetInfo['photo']['new_src'])) {
            foreach ($cabinetInfo['photo']['new_src'] as $file) {
                $src = Storage::put('public/cabinet', $file);
                if ($src) {
                    $photo[] = Storage::url($src);
                }
            }
        }
        $cabinetInfo['photo'] = $photo;
        $cabinet->fill($cabinetInfo);
        $cabinet->save();
        Toast::info(__('platform.entity.saved'));
        return redirect()->route('platform.cabinet.list');
    }

}
