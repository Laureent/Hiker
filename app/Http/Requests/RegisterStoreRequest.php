<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterStoreRequest extends FormRequest
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
            "name" => ["required", "unique:users","max:255"],
            "email" => ["required", "unique:users","max:255"],
            "password" => ["required","confirmed", "min:7","max:255"],
        ];
    }

    /**
     * @return string[]
     * Hibás adat esetén a megfelelő hibaüzenetet adja vissza.
     */

    public function messages()
    {
        return [
            'name.required' => 'A név mező kitöltése kötelező!',
            'name.unique' => 'A név már foglalt.',
            'name.' => 'A név maximum 255 karakter lehet!',
            'email.required' => 'Az email mező kitöltése kötelező!',
            'email.unique' => 'Az email már foglalt.',
            'email.max' => 'Az email maximum 255 karakter lehet!',
            'password.required' => 'A jelszó kitöltése kötelező!',
            'password.confirmed' => 'A jelszó megerősítés kitöltése kötelező!',
            'password.min' => 'A jelszónak legalább 7 karakternek kell lennie!',
            'password.max' => 'A jelszó maximum 255 karakter lehet!',
        ];
    }
}
