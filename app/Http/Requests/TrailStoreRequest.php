<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrailStoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "place" => ["string","required","max:100"],
            "length" => ["required","max:10"],
            "difficulty" => ["required","max:25","string"],
            "description" => ["required","string","max:255"],
            "img" => ["string"],
            "map" => ['required',"max:500","string"]
        ];
    }
}
