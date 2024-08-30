<?php

namespace App\Http\Requests\Ceo\Web\Dashboard\Service;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'title'=>['required','string'],
            'content'=>['required','string'],
            'status'=>['required','in:pending,readed'],
            'big_icon'=>['required','mimes:png,jpg,jpeg,svg'],
            'small_icon'=>['required','mimes:png,jpg,jpeg,svg']
        ];
    }
}
