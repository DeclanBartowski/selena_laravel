<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Contact;

use App\Models\Contact;
use App\Models\Social;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ContactListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'contact';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id', __('admin_contacts.ID'))->render(fn(Contact $contact) => Link::make((string)$contact->id)
                ->route('platform.contacts.edit', $contact->id)),
            TD::make('email', __('admin_contacts.email')),
            TD::make('address', __('admin_contacts.address')),
            TD::make('text', __('admin_contacts.text')),
            TD::make('map', __('admin_contacts.map'))->render(function (Contact $contact) {
                return (!empty($contact->map)) ? implode(',', $contact->map) : '';
            }),
            TD::make('link_map', __('admin_contacts.link_map')),
            TD::make('work_time', __('admin_contacts.work_time')),
            TD::make('social_link', __('admin_contacts.social_link'))->render(function (Contact $contact) {
                $result = '';
                if (!empty($contact->social_link)) {
                    $socials = Social::whereIn('id', $contact->social_link)->select('name')->pluck('name')->all();
                    $result = implode(',', $socials);
                }
                return $result;
            }),
            TD::make('phone', __('admin_contacts.phone')),

        ];
    }
}
