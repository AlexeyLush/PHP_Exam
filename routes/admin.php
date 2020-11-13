<?php

// admin.php

use App\Http\Controllers\AdminFilmController;
use \Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.admin');
})->name('index');

Route::resource('films', AdminFilmController::class);
