<?php

namespace HomeStore\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstName' => ['required', 'string', 'max:60'],
            'lastName' => ['required', 'string', 'max:60'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }
    public function messages()
    {
        return [
            'required' => 'فیلد :attribute نمیتواند خالی باشد. ',
//            'title.alpha' => 'لطفا فقط حروف وارد کنید.',
//            'title.max:30' => 'حداکثر طول نام باید 30 حرف باشد.'
        ];
    }
    public function attributes()
    {
        return ['firstName'=>'نام'];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(JsonResponse(505,'اطلاعات ورودی معتبر نمی باشد.',$validator->errors()));
    }

}
