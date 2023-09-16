<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlanController;
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



Auth::routes();

Route::match(['GET','POST'], '/members', [UserController::class, 'index'])->name('members');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/plans', [PlanController::class, 'plans'])->name('plans');
Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('payment.form');
Route::post('/create-checkout-session/{plan_id}', [PaymentController::class, 'createCheckoutSession'])->name('createCheckoutSession');
Route::get('/success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('/cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');
