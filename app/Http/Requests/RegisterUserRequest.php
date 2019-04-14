<?php

namespace HomeStore\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterUserRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:40'],
            'last_name' => ['required', 'string', 'max:40'],
            'email' => ['required', 'string', 'email', 'max:128', 'unique:users'],
            'mobile' => ['required', 'string', 'max:11'],
            'Password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => ['string']
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
        return ['first_name' => 'نام'];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(createJsonResponse(505, 'اطلاعات ورودی معتبر نمی باشد.', $validator->errors()));
    }

}
