<?php

namespace HomeStore\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class AddressRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string'],
            'city' => ['required', 'string'],
            'location' => ['required', 'string', 'max:40'],
            'lat' => ['string', 'max:40'],
            'lang' => [ 'string', 'max:40'],
            'is_default' => ['boolean'],
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
        return ['address'=>'آدرس','city' => 'شهر', 'location' => 'محدوده', 'lat' => 'موقعیت جغرافیایی', 'lang' => 'موقعیت جغرافیایی','is_default'=>'پیش فرض'];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(createJsonResponse(505, 'اطلاعات ورودی معتبر نمی باشد.', $validator->errors()));
    }

}
