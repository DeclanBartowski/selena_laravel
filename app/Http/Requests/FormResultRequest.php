<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormResultRequest extends FormRequest
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
            'form_result.id' => '',
            'form_result.title' => 'required',
            'form_result.name' => '',
            'form_result.email' => '',
            'form_result.phone' => '',
        ];
    }
}
