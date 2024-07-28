<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetRequest extends FormRequest
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
            'materials' => 'nullable',
            'floors' => 'nullable',
            'addServices' => 'nullable',
            'min_price' => 'nullable',
            'max_price' => 'nullable',
            'asc' => 'nullable',
            'desc' => 'nullable',
        ];
    }
}
