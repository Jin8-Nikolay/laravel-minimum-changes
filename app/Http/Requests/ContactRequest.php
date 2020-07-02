<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:15|max:500',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'имя'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле name являеться обязательным',
            'email.required' => 'Поле email являеться обязательным',
            'subject.required' => 'Поле subject являеться обязательным',
            'message.required' => 'Поле message являеться обязательным',
        ];
    }
}
