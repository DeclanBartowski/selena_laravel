<?php

declare(strict_types=1);

namespace App\Orchid\Screens\Contact;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Social;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ContactEditScreen extends Screen
{
    /**
     * @var Contact
     */
    public $contact;

    /**
     * Query data.
     *
     * @param Contact $contact
     *
     * @return array
     */
    public function query(Contact $contact): iterable
    {
        return [
            'contact' => $contact,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->contact->exists ? __('Edit') : __('Add');
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return __('platform.contact.name');
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
                ->canSee($this->contact->exists),
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
                Input::make('contact.id')->readonly()->hidden(),
                Input::make('contact.email')->title(__('admin_contacts.email')),
                Input::make('contact.phone')->title(__('admin_contacts.phone')),
                Input::make('contact.address')->title(__('admin_contacts.address')),
                Input::make('contact.link_map')->title(__('admin_contacts.link_map')),
                Input::make('contact.work_time')->title(__('admin_contacts.work_time')),
                Input::make('contact.text')->title(__('admin_contacts.text')),
                Relation::make('contact.social_link')
                    ->fromModel(Social::class, 'name')
                    ->multiple()
                    ->title(__('admin_contacts.social_link')),
                Group::make([
                    Input::make('contact.map.0')->title(__('admin_contacts.map') . ' x'),
                    Input::make('contact.map.1')->title(__('admin_contacts.map') . ' y'),
                ]),


            ])
        ];
    }

    /**
     * @param ContactRequest $contactRequest
     * @param Contact $contact
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(ContactRequest $contactRequest, Contact $contact)
    {
        $contact->fill($contactRequest->validated('contact'));
        $contact->save();
        Toast::info(__('platform.entity.saved'));
        return redirect()->route('platform.contact.list');
    }

}
