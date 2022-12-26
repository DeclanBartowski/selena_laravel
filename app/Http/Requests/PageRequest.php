<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
            'page.code' => ['required', 'string',  'unique:pages,code,' . $this->page['id']],
            'page.active' => 'required',
            'page.title' => 'required',
            'page.content' => 'required',

        ];
    }
}
