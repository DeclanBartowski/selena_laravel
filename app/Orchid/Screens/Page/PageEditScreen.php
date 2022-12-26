<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Page;

use App\Http\Requests\PageRequest;
use App\Models\Page;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\SimpleMDE;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class PageEditScreen extends Screen
{
    /**
     * @var Page
     */
    public $page;

    /**
     * Query data.
     *
     * @param Page $page
     *
     * @return array
     */
    public function query(Page $page): iterable
    {
        return [
            'page' => $page,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->page->exists ? __('Edit') : __('Add');
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return __('platform.page.name');
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
               ->canSee(! $this->page->exists),
           Button::make(__('Save'))
               ->icon('check')
               ->method('createOrUpdate')
               ->canSee($this->page->exists),
           Button::make(__('Remove'))
               ->icon('trash')
               ->method('remove')
               ->canSee($this->page->exists),
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
                Input::make('page.id')->readonly()->hidden(),
                CheckBox::make('page.active')->sendTrueOrFalse()->title(__('admin_page.active')),
                Input::make('page.code')->title(__('admin_page.code')),
                Input::make('page.title')->title(__('admin_page.title')),
                SimpleMDE::make('page.content')->title(__('admin_page.content')),
            ])
        ];
    }

    /**
     * @param PageRequest $pageRequest
     * @param Page $page
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(PageRequest $pageRequest, Page $page)
    {
        $page->fill($pageRequest->validated('page'));
        $page->save();
        Toast::info(__('platform.entity.saved'));
        return redirect()->route('platform.page.list');
    }


    /**
     * @param Page $page
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     *
     */
    public function remove(Page $page)
    {
        $page->delete();
        Toast::info(__('platform.entity.removed'));
        return redirect()->route('platform.page.list');
    }

}
