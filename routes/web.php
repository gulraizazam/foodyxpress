<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [App\Http\Controllers\FrontendController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\FrontendController::class, 'register'])->name('register');
Route::get('/contactus', [App\Http\Controllers\FrontendController::class, 'Contact_us'])->name('contactus');
Route::get('/aboutus', [App\Http\Controllers\FrontendController::class, 'About'])->name('about');