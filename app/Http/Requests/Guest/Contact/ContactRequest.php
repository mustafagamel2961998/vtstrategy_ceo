<?php

namespace App\Http\Requests\Guest\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'=>['required','string'],
            'phone'=>['required','string'],
            'whatsapp'=>['nullable','string'],
            'email'=>['nullable','email'],
            'subject'=>['required','string'],
            'content'=>['required','string']
        ];
    }
}
