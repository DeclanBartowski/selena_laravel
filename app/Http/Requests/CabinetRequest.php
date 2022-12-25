<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CabinetRequest extends FormRequest
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
            'cabinet.id'  => '',
            'cabinet.name'  => 'required',
            'cabinet.children_area_value'  => '',
            'cabinet.children_area_description'  => '',
            'cabinet.cabinet_value'  => '',
            'cabinet.cabinet_description'  => '',
            'cabinet.session_value'  => '',
            'cabinet.session_description'  => '',
            'cabinet.preview'  => '',
            'cabinet.photo.old_src'  => '',
            'cabinet.photo.new_src'  => '',
        ];
    }
}
