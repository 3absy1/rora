<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeClient extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'string|max:255',
            'phone' => 'max:20',
            'email' => 'email|max:255',
            'reseller' => 'boolean',
            'minutes' => 'integer|min:0',
            'ads_count' => 'integer|min:0',
            'ads_minutes' => 'integer|min:0',


        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required.',
            'phone.required' => 'Phone number is required.',
            'email.required' => 'Email address is required.',
            'reseller.required' => 'Reseller field is required.',
            'reseller.boolean' => 'Reseller field must be 0 or 1.',
            'minutes.required' => 'Minutes field is required.',
            'minutes.integer' => 'Minutes must be an integer value.',
            'minutes.min' => 'Minutes must be at least 0.',
            'ads_count.required' => 'Ads count is required.',
            'ads_count.integer' => 'Ads count must be an integer value.',
            'ads_count.min' => 'Ads count must be at least 0.',
            'ads_minutes.required' => 'Ads count is required.',
            'ads_minutes.integer' => 'Ads count must be an integer value.',
            'ads_minutes.min' => 'Ads count must be at least 0.',
        ];
    }
}
