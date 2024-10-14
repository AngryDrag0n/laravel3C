<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateSupport extends FormRequest
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
        $rules = [
            'name' => 'required|min:3|max:255|unique:supports',
            'idade'=> 'required|unique:supports',
            'latitude' => 'required|min:3|max:10000',
            'longitude' => 'required|min:3|max:10000',
            'inventario' => 'unique:supports',
        ];

        if($this->method() === 'PUT'){
            $rules ['name'] = ['sometimes','required','min: 3','max: 255',
                    Rule::unique('supports')->ignore($this->id)
            ];

            $rules ['idade'] = ['sometimes', 'required', 'min:0', 'max:120',
                    Rule::unique('supports')->ignore($this->id)];

        }
        return $rules;

    }
}
