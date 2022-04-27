<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FriendshipController;
use App\Http\Controllers\HikerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TrailController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ParkController;
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

Route::group(['middleware' => 'auth'], function (){
    //Főoldal
    Route::get('/index', [HikerController::class,"index"])->name("home");

    //Útvonalak
    Route::get('/trails', [TrailController::class,'index'])->name("trails.index");
    Route::get('/trails/show/{id}', [TrailController::class,'show'])->name('trails.show');
    Route::get('/trails/parks',[ParkController::class, 'index'])->name('parks.list');
    Route::get('/trails/parks/show/{name}',[ParkController::class, 'show'])->name('parks.show');

    //Admin->Útvonalak szerkesztése
    Route::get('/admin/create',[TrailController::class,'create'])->name('admin.create');
    Route::post('/admin/create/store',[TrailController::class,'store'])->name('admin.store');
    Route::get('/admin/delete/{id}',[TrailController::class,'destroy'])->name('admin.destroy');

    //Admin->Képek szerkesztése
    Route::get('/admin/image/{id}',[ImageController::class,'index'])->name('admin.image');
    Route::post('/admin/image/store/{id}',[ImageController::class,'store'])->name('admin.image.store');
    Route::get('/admin/image/delete/{id}',[ImageController::class,'delete'])->name('admin.image.delete');
});

//Barátok
Route::get('/friends',[FriendshipController::class,'index'])->middleware('auth')->name('friends.index');
Route::get('/friends/search',[FriendshipController::class,'search'])->middleware('auth')->name('friends.search');





