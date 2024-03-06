<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

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




Auth::routes();


    Route::get('/', [WebsiteController::class, 'welcome']);
    Route::get('service/{any}', [WebsiteController::class, 'service']);
    Route::get('about', [WebsiteController::class, 'about']);
    Route::get('contact', [WebsiteController::class, 'contact']);
    Route::get('terms-condition', [WebsiteController::class, 'terms']);
    Route::get('privacy-policy', [WebsiteController::class, 'privacy']);
    Route::get('booking/{any}', [WebsiteController::class, 'booking']);
    Route::get('booking', [WebsiteController::class, 'getbookings']);
    Route::post('getTimeSlot', [WebsiteController::class, 'getTimeSlot']);
    Route::post('savebooking', [WebsiteController::class, 'savebooking']);
    Route::post('paymentlink', [WebsiteController::class, 'paymentlink']);
Route::post('/contact', [WebsiteController::class, 'contactsave'])->name('contact.submit');