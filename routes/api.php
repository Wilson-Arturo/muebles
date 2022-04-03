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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource(name: 'usuario', controller: 'UsuarioController');
Route::get('/productos', 'App\Http\Controllers\ProductoController@index');//mostrar todos los registros
Route::post('/productos', 'App\Http\Controllers\ProductoController@store');//crear un registro
Route::put('/productos/{id_productos}', 'App\Http\Controllers\ProductoController@update');//actualizar
Route::delete('/productos/{id_productos}', 'App\Http\Controllers\ProductoController@destroy');//borrar