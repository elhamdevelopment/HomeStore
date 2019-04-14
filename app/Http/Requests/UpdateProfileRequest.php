<?php

namespace HomeStore\Http\Requests;

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
            'last_name' => ['required', 'string', 'max:40'],
            'avatar' => ['string']
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
        return ['first_name' => 'نام','last_name' => 'نام خانوادگی'];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(createJsonResponse(505, 'اطلاعات ورودی معتبر نمی باشد.', $validator->errors()));
    }

}
