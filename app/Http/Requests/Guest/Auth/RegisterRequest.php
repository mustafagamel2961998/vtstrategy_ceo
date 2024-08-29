<?php

namespace App\Http\Requests\Guest\Auth;


use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

     protected function prepareForValidation()
     {
         if($this->politics_status){
            $politics_status = '1';
         } else {
            $politics_status='0';
         }
         $this->merge([
             'politics_status'=>$politics_status,
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
            'domain'=>['required','unique:tenants,domain','regex:/^[^\.]*$/'],

            'company_name_ar'=>['nullable','string','regex:/^[^\.]*$/'],
            'company_name_en'=>['required','string','regex:/^[^\.]*$/'],

            'name'=>['required','string'],
            'job_title'=>['required','string'],
            'email'=>['required','email','unique:tenants,email'],
            'mobile'=>['required','unique:tenants,mobile'],

            'password'=>['required','string','confirmed','min:6'],


            'politics_status'=>['required'],


        ];
    }
    
}
