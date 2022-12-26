<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicePriceRequest extends FormRequest
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
           'service_price.name' => ['required', 'string'],
           'service_price.code' => ['required', 'string',  'unique:service_prices,code,' . $this->service_price['id']],
           'service_price.price' => ['required', 'numeric'],
           'service_price.description' => ['string', 'nullable'],
           'service_price.active' => ['boolean'],
        ];
    }
}
