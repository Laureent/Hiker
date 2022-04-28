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
            "place" => ["required","max:100"],
            "length" => ["required","max:10"],
            "difficulty" => ["required",],
            "description" => ["required",":500"],
            "nationalpark" => ["max:255"],
            "map" => ['required',],
        ];
    }

    public function messages()
    {
        return ['place.required' => 'Adja meg az útvonal helyét!',
            'length.required' => 'Adja meg az útvonal hosszát!',
            'length.max' => 'A távolság maximum 10 karakter lehet!',
            'difficulty.required' => 'Válassza ki az útvonal nehézségét!',
            'description.required' => 'Adja meg az útvonal leírását pár szóban!',
            'description.max' => 'Az útvonal leírása maximum 500 karakter lehet!',
            'nationalpark.max' => 'A nemzeti park neve maximum 255 karakter lehet!',
            'map.required' => 'Adja meg az útvonal Google Maps linkjét!',
            ];
    }
}
