<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DoctorStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'national_id' =>['required','min:14','max:14',Rule::unique('doctors', 'national_id')->ignore($this->national_id,'national_id')],
            'email' =>['required',,Rule::unique('doctors', 'email')->ignore($this->email,'email')],
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png|max:2048',
        ];
    }


    public function messages()
    {
        return [
            'national_id.required' => 'National Id is Required',
            'national_id.min' => 'National Id lenght is 14 numbers',
            'national_id.max' => 'National Id lenght is 14 numbers',
            'name.required' => 'Name is Required',
            'email.required' => 'Name is Required',

        ];
    }
}
