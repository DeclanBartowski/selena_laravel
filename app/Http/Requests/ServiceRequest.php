<?php

namespace App\Http\Requests;

use App\Rules\ServiceCodeUnique;
use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'service.name' => ['required', 'string'],
            'service.code' => ['required', 'string', 'unique:services,code,' . $this->service['id']],
            'service.active' => ['boolean'],
            'service.sort' => ['numeric'],
            'service.services' => ['exists:service_prices,id', 'nullable'],
            'service.preview_picture' => '',
            'service.preview_content' => '',
            'service.detail_picture' => '',
            'service.detail_content' => '',
            'service.main_picture' => '',
            'service.main_content' => '',
        ];
    }
}
