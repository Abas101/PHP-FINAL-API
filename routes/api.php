<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/movies', 'App\Http\Controllers\API\MovieController@index')->middleware('auth:api');
Route::get('/movies/{id}', 'App\Http\Controllers\API\MovieController@findById')->middleware('auth:api');
Route::get('/categories', 'App\Http\Controllers\API\CategoryController@index')->middleware('auth:api');
Route::get('/categories/{id}', 'App\Http\Controllers\API\CategoryController@getMovieByCategory')->middleware('auth:api');
Route::post('/register', 'App\Http\Controllers\API\AuthController@register');
Route::post('/login', 'App\Http\Controllers\API\AuthController@login');
Route::post('/categories/add', 'App\Http\Controllers\API\CategoryController@addCategory')->middleware('auth:api');
Route::post('/movies/add', 'App\Http\Controllers\API\MovieController@addMovie')->middleware('auth:api');
Route::apiResource('/movie', 'Api\MovieController')->middleware('auth:api');
