<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'title',
        'year',
        'country',
        'company',
        'director',
        'producer',
        'screenwriter',
        'budget',
        'fees',
        'rating',
        'genre',
        'description'
    ];

    public function deleteImage() {

        if (!$this->image_path)
            return;

        $file = storage_path('app/' . $this->image_path);

        if (!file_exists($file))
            return;

        unlink($file);
    }

    function favorites(){
        return $this->belongsToMany(User::class, Favorite::class);
    }

    function user() {
        return $this->belongsTo(User::class);
    }

}
