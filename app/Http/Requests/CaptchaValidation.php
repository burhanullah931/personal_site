<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaptchaValidation extends FormRequest
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
             
             'g-recaptcha-response' => 'required|recaptcha'
         ];
    }
    public function messages()
    {
        return [
       
       'g-recaptcha-response.recaptcha' => 'Captcha verification failed',
       'g-recaptcha-response.required' => 'Please complete the captcha'
       ];
    }
}
