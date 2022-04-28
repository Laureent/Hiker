<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrailUpdateRequest extends FormRequest
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
            "length" => ["max:10"],
            "description" => ["max:255"],
            "nationalpark" => ["max:255"],
        ];
    }

    /**
     * @return string[]
     * Hibás adat esetén a megfelelő hibaüzenetet adja vissza.
     */

    public function messages()
    {
        return [
            'length.max' => 'A távolság maximum 10 karakter lehet!',
            'description.max' => 'Az útvonal leírása maximum 500 karakter lehet!',
            'nationalpark.max' => 'A nemzeti park neve maximum 255 karakter lehet!',
        ];
    }
}
