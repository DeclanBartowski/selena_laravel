<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MetaFieldsRequest extends FormRequest
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
            'metaField.route' => ['required', 'string',  'unique:meta_fields,route,' . $this->metaField['id']],
            'metaField.title' => 'required',
            'metaField.keywords' => 'required',
            'metaField.description' => 'required',

        ];
    }
}
