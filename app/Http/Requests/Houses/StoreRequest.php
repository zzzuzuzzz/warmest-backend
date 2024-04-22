<?php

namespace App\Http\Requests\Houses;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'description' => 'required',
            'content' => 'required',
            'preview_image' => 'required',
            'main_price' => 'required',
            'add_price' => 'required',
            'is_published' => 'nullable',
            'category_id' => 'nullable',
            'add_services_ids' => 'nullable|array'
        ];
    }
}
