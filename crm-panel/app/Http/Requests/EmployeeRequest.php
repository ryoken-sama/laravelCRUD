<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',  // First name is required and a string
            'last_name' => 'required|string|max:255',   // Last name is required and a string
            'company_id' => 'required|exists:companies,id', // Company should be valid
            'email' => 'nullable|email|max:255',  // Email is optional but must be a valid email if provided
            'phone' => 'nullable|string|max:20',  // Phone is optional and can be a string up to 20 characters
        ];
    }
}
