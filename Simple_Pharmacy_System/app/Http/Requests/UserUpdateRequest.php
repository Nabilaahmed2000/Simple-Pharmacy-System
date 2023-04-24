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
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'password' => 'required|string|min:8|confirmed',
            'national_id' => 'required|string|len:14',
            'gender' => 'required|in:Male,Female,Other',
            'date_of_birth' => 'required|date',
            'phone' => 'required|string|len:11',
        ];
    }
}
