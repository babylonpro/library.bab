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

Route::get('/', function () {

});

Route::fallback(function(){
    return response()->json([
        'error' => __('message.error_not_found')
    ], 404);
});

Route::apiResource('/authors', AuthorController::class);
