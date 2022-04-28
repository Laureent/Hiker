<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    /**
     * @return \string[][]
     * Az alábbi szabájok alapján validálja az adatokat.
     */

    public function rules()
    {
        return [
            "email"=> ["required"],
            "password" =>["required"],
        ];
    }

    /**
     * @return string[]
     * Hibás adat esetén a megfelelő hibaüzenetet adja vissza.
     */

    public function messages()
    {
        return [
            'email.required' => 'Adja meg az email címét!',
            'password.required' => 'Adja meg a jelszavát!',
        ];
    }
}
