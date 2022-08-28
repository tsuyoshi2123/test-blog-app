<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'name'      => 'required|max:255',
            'food'      => 'required|max:255',
            'comment'   => 'required|max:255',
            'time'      => 'required',
        ];
    }

    /**
     * request errror messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'    => '入力必須',
            'food.required'    => '入力必須',
            'comment.required' => '入力必須',
            'time.required'    => '入力必須'
        ];
    }
}
