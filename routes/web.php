<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FriendshipController;
use App\Http\Controllers\HikerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TrailController;
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

//Útvonalak
Route::get('/trails', [TrailController::class,'index'])->middleware('auth')->name("trails.index");
Route::get('/trails/show/{id}', [TrailController::class,'show'])->middleware('auth')->name('trails.show');

//Barátok
Route::get('/friends',[FriendshipController::class,'index'])->middleware('auth')->name('friends.index');
Route::get('/friends/search',[FriendshipController::class,'search'])->name('friends.search');

//Admin
Route::get('/admin/create',[TrailController::class,'create'])->name('admin.create');

