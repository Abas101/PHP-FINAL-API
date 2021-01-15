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
        $movies = Movie::with('categories')->get();
        return response()->json([
            'Movies' => $movies
        ]);

    }

    public function findById($id)
    {
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
        $movie = Movie::find($id)->update($request->all());
        return "Updated $movie";
    }


    public function deleteMovie($id)
    {
        $movie = Movie::destroy($id);
        return "Deleted $movie";
    }
}

