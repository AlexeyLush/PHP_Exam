<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function films(){
        return $this->hasMany(Film::class);
    }

    function isAdmin() {
        return $this->email == config('admin.email');
    }

    function favorites(){
        return $this->belongsToMany(Film::class, Favorite::class);
    }

    function isFavorite(Film $film){
        return $this->favorites()
            ->where('film_id', $film->id)
            ->exists();
    }

}
