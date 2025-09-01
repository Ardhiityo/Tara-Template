<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceStoreRequest extends FormRequest
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
            'title' => ['required', 'min:3', 'unique:services,title'],
            'type' => ['required', 'in:skill,product'],
            'price' => ['required', 'numeric', 'min:1'],
            'photo' => ['required', 'image', 'max:500'],
            'description' => ['required', 'min:10']
        ];
    }
}
