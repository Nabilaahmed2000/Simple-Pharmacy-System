<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'national_id' => 'required|string|size:14,' . $this->id,
            'gender' => 'required|in:Male,Female,Other',
            'date_of_birth' => 'nullable|date',
            'phone' => 'required|string|size:11',
            'image' => 'nullable|image|mimes:jpg,png|max:2048'
        ];
    }
}
