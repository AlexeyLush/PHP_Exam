<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    function user(){
        return $this->belongsTo(User::class);
    }

    function film(){
        return $this->belongsTo(Film::class);
    }
}
