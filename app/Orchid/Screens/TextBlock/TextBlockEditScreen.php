<?php

declare(strict_types=1);

namespace App\Orchid\Screens\TextBlock;

use App\Http\Requests\TextBlockRequest;
use App\Models\TextBlock;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\SimpleMDE;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class TextBlockEditScreen extends Screen
{
    /**
     * @var TextBlock
     */
    public $text_block;

    /**
     * Query data.
     *
     * @param TextBlock $text_block
     *
     * @return array
     */
    public function query(TextBlock $text_block): iterable
    {
        return [
            'text_block' => $text_block,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->text_block->exists ? __('Edit') : __('Add');
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return __('platform.text_block.name');
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
               ->canSee(! $this->text_block->exists),
           Button::make(__('Save'))
               ->icon('check')
               ->method('createOrUpdate')
               ->canSee($this->text_block->exists),
           Button::make(__('Remove'))
               ->icon('trash')
               ->method('remove')
               ->canSee($this->text_block->exists),
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
                Input::make('text_block.id')->readonly()->hidden(),
                CheckBox::make('text_block.active')->sendTrueOrFalse()->title(__('admin_text_blocks.active')),
                Input::make('text_block.name')->title(__('admin_text_blocks.name')),
                Input::make('text_block.code')->title(__('admin_text_blocks.code')),
                Input::make('text_block.link')->title(__('admin_text_blocks.link')),
                Upload::make('text_block.video')->title(__('admin_text_blocks.video'))->maxFiles(1)->acceptedFiles('.mp4'),
                Picture::make('text_block.preview_picture')->title(__('admin_text_blocks.preview_picture')),
                SimpleMDE::make('text_block.preview_content')->title(__('admin_text_blocks.preview_content')),
                Picture::make('text_block.detail_picture')->title(__('admin_text_blocks.detail_picture')),
                SimpleMDE::make('text_block.detail_content')->title(__('admin_text_blocks.detail_content')),
            ])
        ];
    }

    /**
     * @param TextBlockRequest $textBlockRequest
     * @param TextBlock $textBlock
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(TextBlockRequest $textBlockRequest, TextBlock $textBlock)
    {
        $textBlock->fill($textBlockRequest->validated('text_block'));
        $textBlock->save();
        Toast::info(__('platform.entity.saved'));
        return redirect()->route('platform.text_block.list');
    }

    /**
     * @param TextBlock $textBlock
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     *
     */
    public function remove(TextBlock $textBlock)
    {
        $textBlock->delete();
        Toast::info(__('platform.entity.removed'));
        return redirect()->route('platform.text_block.list');
    }

}
