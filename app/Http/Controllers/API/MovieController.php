<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
//        $movies = Movie::select('movies.*', 'categories.category_name')->join('categories', 'categories.id', '=', 'movies.category_id')->get();
        $movies = Movie::with('categories')->get();
        return response()->json([
            'Movies' => $movies
        ]);

    }

    public function findById($id)
    {
//        $movie = Movie::findOr('categories')->where('movies.id', '=', $id)->get();
        $movie = Movie::with('categories')->find($id);
        return $movie;
    }

    public function addMovie(Request $request)
    {
        $movie = new Movie();
        $movie->title = $request->input('title');
        $movie->description = $request->input('description');
        $movie->Categories()->attach($request->input('category_id'));

        $movie->save();

        return $movie;

    }

    public function updateMovie(Request $request, $id) {
        Movie::find($id)->update($request->all());
    }
}

