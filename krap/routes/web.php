<?php

use App\Http\Controllers\authController;
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

Route::get('/my', function () {
    return "sdf;les;klfjseol;fjsel";
});

Route::get('/register', [authController::class,'showRegisterForm'])->name('register');
Route::post('/register', [authController::class,'register']);

Route::get('/login', [authController::class,'showLoginForm'])->name('login');
Route::post('/login', [authController::class,'login']);

Route::post('/logout', [authController::class,'logout'])->name('logout');

Route::get('/home', function(){
    return view('home');
})->middleware('auth')->name('home');