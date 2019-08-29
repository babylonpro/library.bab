<?php

use Illuminate\Http\Request;

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

Route::any('/', function () {
     \Artisan::call('route:list');
     return response(\Artisan::output(), 200)->header('Content-Type', 'text/plain');
});
// Author Routes
Route::apiResource('authors', AuthorController::class);
Route::get('authors/{author}/books', 'AuthorController@books');
// Book Routes
Route::apiResource('books', BookController::class);
Route::put('books/{book}/giveout/{status}', 'BookController@giveout');
Route::post('books/find', 'BookController@find');
