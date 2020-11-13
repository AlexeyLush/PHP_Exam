<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function toggle(Film $film){
        $favorites = $film->favorites();
        $exists = auth()->user()->isFavorite($film);

        if ($exists){
            $favorites->detach(auth()->id());
        } else{
            $favorites->attach(auth()->id());
        }

        return [
            'favorite' => !$exists
        ];
    }

    function index(){

        $films = auth()->user()
            ->favorites()
            ->latest()
            ->paginate(10);

        return view('films.favorites', [
            'films' => $films
        ]);
    }
}
