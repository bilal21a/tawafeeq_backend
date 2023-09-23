<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContentController;
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
Route::get('register', function () {
    return view('register');
})->name("register");

Auth::routes();
Route::middleware(['auth'])->group(function () {
Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
Route::get('profile/edit', [ProfileController::class, 'edit_profile'])->name('edit_profile');
Route::post('profile/update', [ProfileController::class, 'update_profile'])->name('update_profile');
Route::get('members_profile/{id}', [ProfileController::class, 'members_profile'])->name('members_profile');
});
// Before Login
Route::get('about', [ContentController::class, 'about'])->name('about');
Route::get('contact', [ContentController::class, 'contact'])->name('contact');
Route::get('login_page', [ContentController::class, 'login_page'])->name('login_page');

// Home page
Route::get('home', [UserController::class, 'home'])->name('home');
// Members
Route::match(['GET','POST'], '/members', [UserController::class, 'index'])->name('members');
// advance Search
Route::get('/advance_search', [HomeController::class, 'advance_search'])->name('advance_search');
// Plans
Route::get('/plans', [PlanController::class, 'plans'])->name('plans');
Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('payment.form');
Route::post('/create-checkout-session/{plan_id}', [PaymentController::class, 'createCheckoutSession'])->name('createCheckoutSession');
Route::get('/success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('/cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');

Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
Route::get('/get_chats_heads', [ChatController::class, 'get_chats_heads'])->name('chat.chats_heads');
Route::get('/get_chat_id/{partner_id}', [ChatController::class, 'get_chat_id'])->name('chat.chat_id');
Route::post('/send_message', [ChatController::class, 'send_message'])->name('chat.send_message');
