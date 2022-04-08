<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


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