<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrailUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "place" => ["string","max:100"],
            "length" => ["max:10"],
            "difficulty" => ["max:25","string"],
            "description" => ["string","max:255"],
            "map" => ["max:500","string"]
        ];
    }
}
