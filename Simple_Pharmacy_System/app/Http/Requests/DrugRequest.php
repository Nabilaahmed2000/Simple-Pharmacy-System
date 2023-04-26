<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DrugRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|string|max:255|min:3',
            'quantity' => 'required|integer',
            'price' => 'required|integer',
            'type' => 'required|string|max:255|min:3',
            // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name is Required',
            'name.min' => 'name minimum lenght is 3',
            'name.max' => 'name maximum lenght is 255',
            'quantity.required' => 'Quantity is Required',
            'price.required' => 'Price is Required',
            'type.required' => 'Type is Required',
            'type.min' => 'type minimum lenght is 3',
            'type.max' => 'type maximum lenght is 255',
            // 'image.image' => 'image is Required',
            // 'image.mimes' => 'image must be jpeg,png,jpg,gif,svg',
            // 'image.max' => 'image maximum size is 2048',
        ];
    }
}
