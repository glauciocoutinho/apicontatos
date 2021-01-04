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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// =================================================================

Route::get('/status', [App\Http\Controllers\Api\ContatoController::class , 'status']);
Route::post('/contatos/add', [App\Http\Controllers\Api\ContatoController::class , 'add']);

Route::get('/contatos', [App\Http\Controllers\Api\ContatoController::class , 'list']);
Route::get('/contatos/{id}', [App\Http\Controllers\Api\ContatoController::class , 'select']);

Route::put('/contatos/{id}', [App\Http\Controllers\Api\ContatoController::class , 'update']);


// Grupo de Rotas
//Route::group(['namespace' => 'Api'], function() {
//    Route::post('/contatos/add', 'ContatoController@add');
//});



// 'App\Http\Controllers\Api\ContatoController@status'
