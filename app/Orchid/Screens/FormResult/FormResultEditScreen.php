<?php

declare(strict_types=1);

namespace App\Orchid\Screens\FormResult;

use App\Http\Requests\AdvantageRequest;
use App\Http\Requests\FormResultRequest;
use App\Models\Advantage;
use App\Models\FormResult;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class FormResultEditScreen extends Screen
{
    /**
     * @var FormResult
     */
    public $form_result;

    /**
     * Query data.
     *
     * @param FormResult $form_result
     *
     * @return array
     */
    public function query(FormResult $form_result): iterable
    {
        return [
            'form_result' => $form_result,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->form_result->exists ? __('Edit') : __('Add');
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return __('platform.form_result.name');
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
               ->canSee(! $this->form_result->exists),
           Button::make(__('Save'))
               ->icon('check')
               ->method('createOrUpdate')
               ->canSee($this->form_result->exists),
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
                Input::make('form_result.id')->readonly()->hidden(),
                Input::make('form_result.title')->title(__('admin_form_results.title')),
                Input::make('form_result.name')->title(__('admin_form_results.name')),
                Input::make('form_result.email')->title(__('admin_form_results.email')),
                Input::make('form_result.phone')->title(__('admin_form_results.phone')),
            ])
        ];
    }

    /**
     * @param FormResultRequest $formResultRequest
     * @param FormResult $formResult
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(FormResultRequest $formResultRequest, FormResult $formResult)
    {
        $formResult->fill($formResultRequest->validated('form_result'));
        $formResult->save();
        Toast::info(__('platform.entity.saved'));
        return redirect()->route('platform.form_result.list');
    }

}
