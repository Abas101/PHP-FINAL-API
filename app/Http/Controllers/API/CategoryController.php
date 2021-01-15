<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json([
           'Categories'=>$categories
        ]);
    }

    public function getMovieByCategory($id) {
        $movies = Category::with('movies')->find($id);
        return $movies;
    }

    public function addCategory(Request $request) {

        $request->validate([
            'category_name' => 'required'
        ]);
        $category = new Category($request->all());
        $category->save();
        return $category;
    }

    public function deleteCategory($id)
    {
        $category = Category::destroy($id);
        return "Deleted $category";

    }


}
