<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateApiRequest extends FormRequest
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
            'name' => 'string|max:255',
            'password' => 'string|min:8|confirmed',
            'national_id' =>'string|size:14,' . $this->id,
            'gender' => 'in:Male,Female,Other',
            'date_of_birth' => 'nullable|date',
            'phone' => 'string|size:11',
            'image' => 'nullable|image|mimes:jpg,png|max:2048'
        ];
    }
}
