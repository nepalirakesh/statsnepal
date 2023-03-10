<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
        return[
            'title'=>'required|alpha',
            'content'=>'required|max:200'
        ];
    }




    public function messages()
{
    return [
        'title.required' => 'A title is required',
        'title.alpha'=>'Only alphabaets allowed',
        'content.required' => 'A content cant be empty ',
        'content.max'=>'only 200 characters allowe',
    ];
}
}
