<?php

namespace HomeStore\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class RoleValidationRequest extends FormRequest
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
            'title' => 'required|alpha|max:30',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'فیلد :attribute نمیتواند خالی باشد. ',
            'title.alpha' => 'لطفا فقط حروف وارد کنید.',
            'title.max:30' => 'حداکثر طول نام باید 30 حرف باشد.'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'عنوان'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(JsonResponse(505,'اطلاعات ورودی معتبر نمی باشد.',$validator->errors()));
    }


}
