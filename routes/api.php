<?php

use App\Http\Controllers\GamesController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


// Можно было использовать apiResource, но решил сделать всё подробно
Route::middleware('api')->group(function () {
    Route::get('/games', [GamesController::class, 'index']);
    Route::post('/games', [GamesController::class, 'store']);
    Route::get('/games/{id}', [GamesController::class, 'show']);
    Route::put('/games/{id}', [GamesController::class, 'update']);
    Route::delete('/games/{id}', [GamesController::class, 'destroy']);

    Route::get('/games/genre/{genre}', [GamesController::class, 'getGamesByGenre']);
});

