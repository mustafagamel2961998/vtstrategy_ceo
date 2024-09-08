<?php

namespace App\Http\Requests\Ceo\Web\Dashboard\Rate;

use Illuminate\Foundation\Http\FormRequest;

class RateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function prepareForValidation()
    {
        if($this->status){
            $status = 'active';
        } else{
            $status = 'archived';
        }

        $this->merge([
            'status'=>$status,
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
            'rate'=>['nullable','mimes:png,jpg,jpeg,svg'],
            'name'=>['required','string'],
            'job_title'=>['required','string'],
            'comment'=>['required','string'],
        ];

    }
}
