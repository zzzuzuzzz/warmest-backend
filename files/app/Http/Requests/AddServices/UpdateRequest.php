<?php

namespace App\Http\Requests\AddServices;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'params_size' => 'required|string',
            'params_floors' => 'required|string',
            'params_length' => 'required|string',
            'params_width' => 'required|string',

            'description' => 'required|string',

            'main_price' => 'required|string',
            'add_price' => 'required|string',
            'credit_info' => 'required|string',

            'images' => 'nullable',

            'is_published' => 'nullable',
            'category_id' => 'nullable',
            'add_services_ids' => 'nullable',
            'deleteImg' => 'nullable'
        ];
    }
}
