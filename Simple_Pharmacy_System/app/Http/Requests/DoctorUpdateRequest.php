<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DoctorUpdateRequest extends FormRequest
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
//            'national_id' => ['required','string','max:255',Rule::unique('doctors', 'national_id')->ignore($this->national_id,'national_id')],
//            'email' => ['required','string','email','max:255',Rule::unique('doctors', 'email')->ignore($this->email,'email')],
            'national_id' =>'required|string|size:14,' . $this->id,
            'email' => 'required|email|unique:users,email,' . $this->id,
            'password' => 'nullable|string|min:8',
            'image' => 'nullable|image|mimes:jpg,png|max:2048',
            'pharmacy_id' => 'required|exists:pharmacies,id',
        ];
    }
}
