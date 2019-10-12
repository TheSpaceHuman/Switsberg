<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'name'	=>	'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2047'
        ];
    }

    public function messages()
  {
    return [
        'name.required' => 'Укажите ваше имя',
        'email.required' => 'Вы забыли указать почту',
        'message.required' => 'Какой же это комментарий, без сообщения',
    ];
  }
}
