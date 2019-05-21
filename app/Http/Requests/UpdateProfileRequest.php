<?php

namespace EasyShop\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateProfileRequest extends FormRequest
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
            'email' => ['required', 'string', 'max:60', 'email'],
            'mobile' => ['required', 'string', 'max:11'],
            'last_name' => ['required', 'string', 'max:40'],
//            'avatar' => ['mimes:jpeg,jpg,png|max:10000'] // KB
        ];
    }

    public function messages()
    {
        return [
            'required' => 'فیلد :attribute نمیتواند خالی باشد.',
            'max:40' => 'فیلد :attribute حداکثر 40 کارکتر می باشد. ',
        ];
    }

    public function attributes()
    {
        return ['mobile'=>'موبایل','first_name' => 'نام', 'last_name' => 'نام خانوادگی', 'email' => 'ایمیل', 'password' => 'رمز عبور','avatar'=>'تصویر کاربر'];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(createJsonResponse(505, 'اطلاعات ورودی معتبر نمی باشد.', $validator->errors()));
    }

}
