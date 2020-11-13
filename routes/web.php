<?php

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (auth()->user()){
        return redirect()->route('films.index');
    }
    return view('index');
})->name('index');


Route::middleware('auth')
    ->group(function () {
        // Тут проверка на авторизацию

        Route::resource('films', FilmController::class)
            ->except('index', 'show');

        Route::prefix('films/{film}')
            ->group(function () {
                Route::put('favorite', [FavoriteController::class, 'toggle']);

            });

        Route::get('favorites', [FavoriteController::class, 'index'])
            ->name('user.favorites');

    });



Route::resource('films', FilmController::class);
