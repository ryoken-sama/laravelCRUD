<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Change this to true to allow validation
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',               // Name is required
            'email' => 'nullable|email|max:255',               // Email is optional but must be a valid email if provided
            'logo' => 'nullable|image|dimensions:min_width=100,min_height=100', // Logo must be an image and at least 100x100 pixels
            'website' => 'nullable|url|max:255',               // Website is optional but must be a valid URL if provided
        ];
    }
}
