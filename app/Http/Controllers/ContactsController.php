<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Social;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function __invoke()
    {
        $contacts = Contact::first();
        $socials = Social::whereIn('id', $contacts->social_link)->orderBy('sort', 'asc')->get();

        return view('contacts.contacts', compact('contacts', 'socials'));
    }
}
