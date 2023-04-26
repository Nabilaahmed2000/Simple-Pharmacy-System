<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule;

class AdminUpdateRequest extends FormRequest
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
            'email' => ['required', 'string', 'email', 'max:255', `Rule::unique('admins', 'email')->ignore($this->email,'email')`],
            'password' => 'required|string|min:6|confirmed',
        ];
    }
}
