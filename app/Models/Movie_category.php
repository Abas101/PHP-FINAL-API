<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie_category extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_id',
        "category_id"
    ];
}
