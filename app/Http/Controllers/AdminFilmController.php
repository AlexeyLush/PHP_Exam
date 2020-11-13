<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FilmFormRequest;
use App\Models\Film;
use App\Models\User;

class AdminFilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        return view('admin.films.index', [
            'films' => $films
        ]);
    }

}
