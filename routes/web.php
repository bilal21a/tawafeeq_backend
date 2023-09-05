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
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});

Route::get('login_page', function () {
    return view('login_page');
});

Route::get('pricing', function () {
    return view('pricing');
});

Route::get('profile_new', function () {
    return view('profile_new');
});

Route::get('register', function () {
    return view('register');
});

Route::get('tawafeeq', function () {
    return view('tawafeeq');
});

Route::get('welcome', function () {
    return view('welcome');
});
