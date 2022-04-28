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
            "place" => ["max:100"],
            "length" => ["max:10"],
            "difficulty" => ["max:25"],
            "description" => ["max:255"],
            "nationalpark" => ["max:255"],
            "map" => ["max:500"]
        ];
    }
}
