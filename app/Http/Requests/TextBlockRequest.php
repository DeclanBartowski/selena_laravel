<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TextBlockRequest extends FormRequest
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
            'text_block.id' => '',
            'text_block.active' => '',
            'text_block.name' => 'required',
            'text_block.code' => 'required',
            'text_block.link' => '',
            'text_block.video' => '',
            'text_block.preview_picture' => '',
            'text_block.preview_content' => '',
            'text_block.detail_picture' => '',
            'text_block.detail_content' => '',

        ];
    }
}
