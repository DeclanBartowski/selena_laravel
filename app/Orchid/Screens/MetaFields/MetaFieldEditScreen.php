<?php

declare(strict_types=1);

namespace App\Orchid\Screens\MetaFields;

use App\Http\Requests\MetaFieldsRequest;
use App\Models\MetaField;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class MetaFieldEditScreen extends Screen
{
    /**
     * @var MetaField
     */
    public $metaField;

    /**
     * Query data.
     *
     * @param MetaField $meta_field
     *
     * @return array
     */
    public function query(MetaField $metaField): iterable
    {
        return [
            'metaField' => $metaField,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->metaField->exists ? __('Edit') : __('Add');
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return __('platform.meta_fields.name');
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
               ->canSee(! $this->metaField->exists),
           Button::make(__('Save'))
               ->icon('check')
               ->method('createOrUpdate')
               ->canSee($this->metaField->exists),
           Button::make(__('Remove'))
               ->icon('trash')
               ->method('remove')
               ->canSee($this->metaField->exists),
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
                Input::make('metaField.id')->readonly()->hidden(),
                Input::make('metaField.route')->title(__('admin_meta_fields.route')),
                Input::make('metaField.title')->title(__('admin_meta_fields.title')),
                Input::make('metaField.keywords')->title(__('admin_meta_fields.keywords')),
                Input::make('metaField.description')->title(__('admin_meta_fields.description')),
            ])
        ];
    }

    /**
     * @param MetaFieldsRequest $metaFieldsRequest
     * @param MetaField $metaField
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(MetaFieldsRequest $metaFieldsRequest, MetaField $metaField)
    {
        $metaField->fill($metaFieldsRequest->validated('metaField'));
        $metaField->save();
        Toast::info(__('platform.entity.saved'));
        return redirect()->route('platform.meta_field.list');
    }


    /**
     * @param MetaField $metaField
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     *
     */
    public function remove(MetaField $metaField)
    {
        $metaField->delete();
        Toast::info(__('platform.entity.removed'));
        return redirect()->route('platform.meta_field.list');
    }

}
