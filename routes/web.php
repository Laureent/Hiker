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

Route::get('/login',[\App\Http\Controllers\AuthController::class,'login'])->name("auth.login");
Route::post('/authenticate',[\App\Http\Controllers\AuthController::class,'authenticate'])->name("auth.authenticate");
Route::post('/logout',[\App\Http\Controllers\AuthController::class,'logout'])->name("auth.logout");
