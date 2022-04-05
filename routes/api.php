<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

<<<<<<< HEAD
/* typeuser */
Route::resource('typeuser', TypeUserController::class);

/* users */
Route::resource('user', UserController::class);

/* payment */
Route::resource('payment', UserController::class);

/* sales */
Route::resource('sale', UserController::class);

/* categoryes */
Route::resource('category', UserController::class);

/* products */
Route::resource('product', UserController::class);

/* details */
Route::resource('detail', UserController::class);
=======
// Route::resource(name: 'usuario', controller: 'UsuarioController');
Route::get('/productos', 'App\Http\Controllers\ProductoController@index');//mostrar todos los registros
Route::post('/productos', 'App\Http\Controllers\ProductoController@store');//crear un registro
Route::put('/productos/{id_productos}', 'App\Http\Controllers\ProductoController@update');//actualizar
Route::delete('/productos/{id_productos}', 'App\Http\Controllers\ProductoController@destroy');//borrar
>>>>>>> 3269c56f136b3cd772195605d1910f8e7c55ab9e
