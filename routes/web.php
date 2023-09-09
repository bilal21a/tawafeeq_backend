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

Route::get('profile', function () {
    return view('profile_new');
})->name("profile");

Route::get('about', function () {
    return view('about');
})->name("about");

Route::get('contact', function () {
    return view('contact');
})->name("contact");

Route::get('login_page', function () {
    return view('login_page');
})->name("login_page");

Route::get('pricing', function () {
    return view('pricing');
})->name("pricing");

Route::get('register', function () {
    return view('register');
})->name("register");

Route::get('tawafeeq', function () {
    return view('tawafeeq');
})->name("tawafeeq");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
