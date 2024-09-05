<?php

namespace App\Http\Requests\Ceo\Web\Dashboard\Service;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'big_icon_class'=>['nullable','string'],
            'small_icon_class'=>['nullable','string'],
            'title'=>['required','string'],
            'content'=>['required','string'],
            'status'=>['required','in:active,archived'],
        ];
    }
}
