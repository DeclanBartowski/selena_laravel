<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'contact.email' => 'email',
            'contact.phone' => '',
            'contact.address' => '',
            'contact.link_map' => '',
            'contact.work_time' => '',
            'contact.social_link' => '',
            'contact.text' => '',
            'contact.map.0' => 'numeric',
            'contact.map.1' => 'numeric',
        ];
    }
}
