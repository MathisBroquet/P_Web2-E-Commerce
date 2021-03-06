<?php

use App\Http\Controllers\CompteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;

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
    return view('pages.home');
});
Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/game', function () {
    return view('pages.game');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/register', function(){
    return view('pages.register');
});
Route::get('/connect', function(){
    return view('pages.connect');
});
Route::post('/register', [UserController::class, 'addUser']);

Route::post('connect', [UserController::class, 'connectUser']);

Route::get('/user', [CompteController::class, 'accueil']);

Route::get('/games', [GameController::class, 'getAllGames']);


Route::get('/your-profile', function(){
    return view('pages.userInfos');
});

Route::get("/game/displayAddGame", [GameController::class, 'getAuthors']);

Route::post("/game/add", [GameController::class, 'addGame'])->name('game.add');
Route::get("/game/test", [GameController::class, 'updateGame']);

Route::get('/contact', function () {
    return view('pages.gontagt');
});

Route::get('/games', [OrderController::class, 'GetAllOrderFromSpecificUser'], function () {
    return view('pages.games');
})->name('Order.get');
