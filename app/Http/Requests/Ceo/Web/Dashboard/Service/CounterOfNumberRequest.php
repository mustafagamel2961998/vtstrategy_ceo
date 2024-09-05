<?php

namespace App\Http\Requests\Ceo\Web\Dashboard\Service;

use Illuminate\Foundation\Http\FormRequest;

class CounterOfNumberRequest extends FormRequest
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
            'successful_consultation_count'=>['nullable','integer'],
            'satisfied_customer_count'=>['nullable','integer'],
            'created_website_count'=>['nullable','integer'],
            'expert_advisor_count'=>['nullable','integer'],
        ];
    }
}
