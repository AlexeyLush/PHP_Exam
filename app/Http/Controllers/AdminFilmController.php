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

    public function create()
    {
        return view('admin.films.form', [
            'title' => 'Новый фильм'
        ]);
    }

    public function store(FilmFormRequest $request)
    {
        $data = $request->validated();

        /** @var User $user */
        $user = auth()->user();

        /** @var Film $film */
        $film = $user->films()
            ->create($data);

        $this->uploadImage($request, $film);

        return redirect()->route('admin.films.index');
    }


    public function edit(Film $film)
    {
        return view('admin.films.form', [
            'title' => 'Редактировать фильм',
            'film' => $film
        ]);
    }

    public function update(FilmFormRequest $request, Film $film)
    {

        $data = $request->validated();

        $film->update($data);
        $this->uploadImage($request, $film);

        return redirect()->route('admin.films.index');
    }


    public function destroy(Film $film)
    {
        $film->deleteImage();
        $film->delete();
        return redirect()->route('admin.films.index');
    }


    protected function uploadImage(FilmFormRequest $request, Film $film){
        if ($request->hasFile('image_path')) {
            $path = $request->file('image_path')->store('public/images');

            $film->deleteImage();

            $film->update([
                'image_path' => $path
            ]);

        }
    }

}
