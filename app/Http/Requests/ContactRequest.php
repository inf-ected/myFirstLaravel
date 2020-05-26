<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // для того чтоб не авторизованый мог отправлять данные
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:15|max:500'
        ];
    }
    // переименуем атрибут для отображения в ошибках
    public function attributes()
    {
        return ['name' => 'Имя'];
    }
     // переименуем сообщение для отображения в ошибках
     public function messages()
     {
         return [
             'name.required' => 'Имя является обязательным !',
             'email.required' => 'Емэйл является обязательным !',
             'email.email' => 'Емэйл должен быть с собачкой и все такое !',
             'subject.required' => 'Тема является обязательным !',
             'message.required' => 'Сообщение является обязательным !'
            ];
     }
}
