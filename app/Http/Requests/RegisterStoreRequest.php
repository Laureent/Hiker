<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "name" => ["required", "unique:users","max:255"],
            "email" => ["required", "unique:users","max:255"],
            "password" => ["required","confirmed", "min:7","max:255"],
        ];
    }
}
