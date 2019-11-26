<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = [
        
        'user_id',
        'title',
        'year',
        'plot',
        'genre',
        'actors',
        'director',
        'runtime',
        'img',
        'imdbID',

    ];
}
