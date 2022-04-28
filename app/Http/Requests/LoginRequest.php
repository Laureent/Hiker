<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "email"=> ["required"],
            "password" =>["required"],
        ];
    }

    public function messages()
    {
        return ['email.required' => 'Adja meg az email címét!',
            'password.required' => 'Adja meg a jelszavát!',
            ];
    }
}
