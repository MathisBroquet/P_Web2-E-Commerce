<?php

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

Route::get('/game/{idGame}', [GameController::class, 'getOneGame'])->name("Game.Get");

Route::get('/contact', function () {
    return view('pages.gontagt');
});

Route::get('/game', [UserController::class, 'GetAllOrderFromSpecificUser'], function () {
    return view('/game');
})->name('Order.Get');
