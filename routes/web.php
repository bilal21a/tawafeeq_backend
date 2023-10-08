<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\FavlistController;
use App\Http\Controllers\ProfileVistorController;
use App\Http\Controllers\TermConditionController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\ProfileVistors;
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
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');
Route::middleware(['auth', 'last_seen'])->group(function () {
    Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('profile/edit', [ProfileController::class, 'edit_profile'])->name('edit_profile');
    Route::post('profile/update', [ProfileController::class, 'update_profile'])->name('update_profile');
    Route::post('profile/delete_profile', [ProfileController::class, 'delete_profile'])->name('delete_profile');

    Route::get('members_profile/{id}', [ProfileController::class, 'members_profile'])->name('members_profile')->middleware('expired_check');

    Route::post('save_rating', [ProfileController::class, 'save_rating'])->name('save_rating');

    Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('payment.form');
    Route::post('/create-checkout-session/{plan_id}', [PaymentController::class, 'createCheckoutSession'])->name('createCheckoutSession');
    Route::get('/success', [PaymentController::class, 'success'])->name('payment.success');
    Route::get('/cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');


    // This is for Fav lists
    Route::post('favlist', [FavlistController::class, 'favlist'])->name('favlist');
    Route::post('remove_from_favlist', [FavlistController::class, 'delete_favlist'])->name('remove_from_favlist');
    Route::get('profilevistor', [ProfileVistorController::class, 'profilevistor'])->name('profilevistor');
    Route::post('save_rating', [ProfileController::class, 'save_rating'])->name('save_rating');


    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    Route::get('/get_chats_heads', [ChatController::class, 'get_chats_heads'])->name('chat.chats_heads');
    Route::get('/read_chat/{chat_id}', [ChatController::class, 'chat_mark_as_read'])->name('chat.chat_id');
    Route::post('/send_message', [ChatController::class, 'send_message'])->name('chat.send_message');
    Route::get('/chat_load/{partner_id}', [ChatController::class, 'chat_load'])->name('chat.chat_load');
    Route::get('/chat_block/{chat_id}/{type}', [ChatController::class, 'chat_block'])->name('chat.chat_block');
    Route::get('/something_went_wrong', [ChatController::class, 'something_went_wrong'])->name('something_went_wrong');
});
// Before Login
Route::get('about', [ContentController::class, 'about'])->name('about');
Route::get('contact', [ContentController::class, 'contact'])->name('contact');
Route::get('terms', [TermConditionController::class, 'termcondition'])->name('termcondition');
Route::get('login_page', [ContentController::class, 'login_page'])->name('login_page');

// Home page
Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('total_members', [UserController::class, 'total_members'])->name('total_members');
Route::get('home_members/{type}', [UserController::class, 'home_members'])->name('home_members');
// Members
Route::match(['GET', 'POST'], '/members', [UserController::class, 'index'])->name('members');
// advance Search
Route::get('/advance_search', [HomeController::class, 'advance_search'])->name('advance_search');
// Plans
Route::get('/plans', [PlanController::class, 'plans'])->name('plans');
