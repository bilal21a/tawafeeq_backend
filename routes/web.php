<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
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

Route::get('members', function () {
    return view('members_list');
})->name("members");


Auth::routes();

Route::get('users', [UserController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('payment.form');
Route::post('/charge', [PaymentController::class, 'processPayment'])->name('payment.process');
Route::post('/create-checkout-session', [PaymentController::class, 'createCheckoutSession'])->name('createCheckoutSession');
