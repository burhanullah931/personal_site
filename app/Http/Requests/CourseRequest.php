<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'title' => 'required',
            'author' => 'required',
            'video_link' => 'required',
            'price' => 'required', 
            'sale_price' => 'required',
            'status' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'The Title field is required',
            'author.required' => 'The Author field is required',
            'video_link.required' => 'The Video Link field is required',
            'price.required' => 'The Price field is required',
            'sale_price.required' => 'The Sale Price field is required',
            'status' => 'The Status field is required'
        ];
    }
}
