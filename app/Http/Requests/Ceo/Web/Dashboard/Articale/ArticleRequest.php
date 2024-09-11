<?php

namespace App\Http\Requests\Ceo\Web\Dashboard\Articale;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'service_id'=>['required','exists:services,id'],
            'title'=>['required','string'],
            'content'=>['required','string'],
            'article'=>['nullable','mimes:png,jpg,jpeg']
        ];
    }

    public function withValidator($validator)
    {
        $validator->sometimes('article', 'required', function ($input) {
            return !$this->route('article'); // Adjust this based on your route parameter
        });
    }
   
}
