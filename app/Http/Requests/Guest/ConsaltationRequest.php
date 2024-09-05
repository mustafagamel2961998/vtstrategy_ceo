<?php

namespace App\Http\Requests\Guest;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;

class ConsaltationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function prepareForValidation()
    {
        $dateTime = Carbon::parse($this->date_time);
        $this->merge([
            'date_time'=>$dateTime,
        ]);
    }
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
            'email'=>['nullable','email'],
            'phone'=>['required','string'],
            'whatsapp'=>['nullable','string'],
            'service_id'=>['required','exists:services,id'],
            'date_time'=>['required','date'],
            'note'=>['nullable','string'],
        ];
    }
}

