<?php

use App\Http\Controllers\FriendshipController;
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

//Friends
Route::get('/friends/search/{id}',[FriendshipController::class,'show'])->name('friends.show');
Route::put('/friends/search/{id}',[FriendshipController::class,'acceptRequest'])->name('friends.accept');
Route::post('/friends/add/{id}',[FriendshipController::class,'addFriend'])->name('friends.add');
Route::delete('/friends/delete/{id}',[FriendshipController::class,'deleteFriends'])->name('friends.delete');
