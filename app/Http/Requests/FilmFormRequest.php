<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'image_path' => 'nullable|image',
            'title' => 'required|max:255',
            'year' => 'nullable|integer|between:1900, 2099',
            'country' => 'required|max:255',
            'company' => 'required|max:255',
            'director' => 'required|max:255',
            'producer' => 'required|max:255',
            'screenwriter' => 'required|max:255',
            'budget' => 'integer',
            'fees' => 'integer',
            'rating' => 'integer',
            'genre' => 'required|max:255',
            'description' => 'required'
        ];
    }
}
