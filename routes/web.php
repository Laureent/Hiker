<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FriendshipController;
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

//Üdvözlő oldal
Route::get('/', [HikerController::class,"welcome"])->name("welcome");

//Regisztráció
Route::get('/register', [RegisterController::class,"create"])->name("register.create");
Route::post('/register', [RegisterController::class,"store"])->name("register.store");


//Bejelentkezés
Route::get('/login',[AuthController::class,'login'])->name("auth.login");
Route::post('/authenticate',[AuthController::class,'authenticate'])->name("authenticate");
Route::post('/logout',[AuthController::class,'logout'])->name("auth.logout");

//Főoldal
Route::get('/index', [HikerController::class,"index"])->middleware('auth')->name("home");

//Barátok
Route::get('/addfriend',[FriendshipController::class,'index'])->middleware('auth')->name('friends.index');
Route::get('/addfriend/search/{id}',[FriendshipController::class,'search'])->name('friends.search');
Route::get('/deletefrined/{id}',[FriendshipController::class,'deleteFriend'])->name('friends.delete');

