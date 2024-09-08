<?php

namespace App\Http\Requests\Ceo\Web\Dashboard\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'website'=>['required','regex:/^https?:\/\/(www\.)?[a-zA-Z0-9\-]+\.[a-z]{2,}(\/.*)?$/'],
            'company_name'=>['required','string'],
            'status'=>['required']
        ];
    }
}
