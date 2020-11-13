<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmFormRequest;
use App\Models\Film;
use App\Models\User;
use Illuminate\Http\Request;

class FilmController extends Controller
{

    public function index()
    {
        $films = Film::all();

        return view('films.index', [
            'films' => $films
        ]);
    }


    public function show(Film $film)
    {

        return view('films.show', [
            'film' => $film
        ]);

    }

    public function create()
    {
        if (auth()->user()->isAdmin() ) {
            return view('admin.films.form', [
                'title' => 'Новый фильм'
            ]);
        }
        return redirect()->route('films.index');
    }

    public function store(FilmFormRequest $request)
    {
        if ( auth()->user()->isAdmin() ) {
            $data = $request->validated();

            /** @var User $user */
            $user = auth()->user();

            /** @var Film $film */
            $film = $user->films()
                ->create($data);

            $this->uploadImage($request, $film);

            return redirect()->route('admin.films.index');
        }
        return redirect()->route('films.index');
    }


    public function edit(Film $film)
    {
        if ( auth()->user()->isAdmin() ) {
            return view('admin.films.form', [
                'title' => 'Редактировать фильм',
                'film' => $film
            ]);
        }
        return redirect()->route('films.index');
    }

    public function update(FilmFormRequest $request, Film $film)
    {
        if ( auth()->user()->isAdmin() ) {
            $data = $request->validated();

            $film->update($data);
            $this->uploadImage($request, $film);

            return redirect()->route('admin.films.index');
        }

        return redirect()->route('films.index');
    }


    public function destroy(Film $film)
    {
        if ( auth()->user()->isAdmin() ) {
            $film->deleteImage();
            $film->delete();
            return redirect()->route('admin.films.index');
        }

        return redirect()->route('films.index');
    }

    protected function uploadImage(FilmFormRequest $request, Film $film)
    {
        if ( $request->hasFile('image_path') ) {
            $path = $request->file('image_path')->store('public/images');

            $film->deleteImage();

            $film->update([
                'image_path' => $path
            ]);

        }
    }

}
