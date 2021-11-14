<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('roles/{user}',[\App\Http\Controllers\UserController::class,'roles']);
Route::get('country',[\App\Http\Controllers\CountryController::class,'index']);
Route::get('post',[\App\Http\Controllers\PostController::class,'index']);
Route::get('post/tag',[\App\Http\Controllers\PostController::class,'tag']);
