<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAddressUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|exists:users,id',
            'area_id' => 'required|exists:areas,id',
            'street_name' => 'required|string',
            'building_number' => 'required|string',
            'floor_number' => 'required|string',
            'flat_number' => 'required|string',
            'is_main' => 'nullable|boolean',
        ];
    }
}
