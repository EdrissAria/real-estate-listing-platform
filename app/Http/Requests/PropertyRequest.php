<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'zip_code' => 'nullable|string|max:20',
            'type' => 'required|in:rent,sale',
            'bedrooms' => 'required|integer|min:0',
            'bathrooms' => 'required|integer|min:0',
            'area' => 'required|numeric|min:0',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The property title is required.',
            'description.required' => 'Please provide a description for the property.',
            'price.required' => 'The price of the property is required.',
            'price.numeric' => 'The price must be a valid number.',
            'address.required' => 'The property address is required.',
            'type.in' => 'The property type must be either rent or sale.',
            'bedrooms.integer' => 'The number of bedrooms must be an integer.',
            'bathrooms.integer' => 'The number of bathrooms must be an integer.',
            'area.numeric' => 'The area must be a numeric value.',
        ];
    }
}
