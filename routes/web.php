<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HikerController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [HikerController::class,"index"])->middleware('auth')->name("home");
//Regisztráció
Route::get('/register', [RegisterController::class,"create"])->name("register.create");
Route::post('/register', [RegisterController::class,"store"])->name("register.store");


//Bejelentkezés
Route::get('/login',[AuthController::class,'login'])->name("auth.login");
Route::post('/authenticate',[AuthController::class,'authenticate'])->name("authenticate");
Route::post('/logout',[AuthController::class,'logout'])->name("auth.logout");
