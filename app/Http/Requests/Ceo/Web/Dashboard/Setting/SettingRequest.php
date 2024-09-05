<?php

namespace App\Http\Requests\Ceo\Web\Dashboard\Setting;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'company_name'=>['required','string'],
            'address'=>['required','string'],
            'email'=>['nullable','email'],
            'phone'=>['required','string'],
            'facebook'=>['nullable','regex:/^https?:\/\/(www\.)?[a-zA-Z0-9\-]+\.[a-z]{2,}(\/.*)?$/'],
            'instagram'=>['nullable','regex:/^https?:\/\/(www\.)?[a-zA-Z0-9\-]+\.[a-z]{2,}(\/.*)?$/'],
            'snapchat'=>['nullable','regex:/^https?:\/\/(www\.)?[a-zA-Z0-9\-]+\.[a-z]{2,}(\/.*)?$/'],
        ];
    }
}
