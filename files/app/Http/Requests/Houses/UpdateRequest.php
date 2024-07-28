<?php

namespace App\Http\Requests\Houses;

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
            'mezzanine' => 'required|integer',
            'main_price' => 'required|integer',
            'add_price' => 'required|integer',
            'credit' => 'required|integer',

            'description' => 'required|string',

            'article' => 'required|string',
            'finishing' => 'required|integer',
            'number_of_bedrooms' => 'required|integer',
            'electricity' => 'required|integer',
            'water' => 'required|integer',
            'gas' => 'required|integer',

            'images' => 'nullable',

            'is_published' => 'nullable',
            'floor_category_id' => 'required|integer',
            'material_category_id' => 'required|integer',
            'add_services_ids' => 'nullable'
        ];
    }
}
