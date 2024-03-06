<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\EmployeeController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\admin\BookingController;
use App\Http\Controllers\admin\ExtraController;


Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::resource('/', AdminController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/employee', EmployeeController::class);
    Route::resource('/service', ServicesController::class);
    Route::resource('/Extra', ExtraController::class);
    Route::get('/Extradelete/{id}', [ExtraController::class, 'destroy'])->name('Extradelete');

    Route::resource('/booking', BookingController::class);
    Route::get('/bookings/assigned', [BookingController::class, 'assignedBooking'])->name('assigned.Booking');
    Route::get('/bookings/complete', [BookingController::class, 'completeBooking'])->name('complete.Booking');
    Route::get('/bookings/rejected', [BookingController::class, 'rejectedBooking'])->name('rejected.Booking');
    Route::get('bookings/{id}/{status}', [BookingController::class, 'bookingsupdate'])->name('bookings.update');

    Route::post('bookings/assignset', [BookingController::class, 'bookingsassign'])->name('bookings.assignset.new');
    Route::post('bookings/assignset/update', [BookingController::class, 'updateAssignment'])->name('bookings.assignset.update');
    Route::post('serviceupdate/{id}', [ServicesController::class, 'update'])->name('serviceupdate');

    // Routes for PageController methods
    Route::get('about', [PageController::class, 'about'])->name('admin.about');
    Route::post('about', [PageController::class, 'saveabout'])->name('save.about');
    
    Route::get('homepage', [PageController::class, 'contact'])->name('admin.contact');
    Route::post('admin/homepage/hero', [PageController::class, 'homepagehero'])->name('admin.homepage.hero');
    Route::post('admin/homepage/Service', [PageController::class, 'homepageService'])->name('admin.homepage.Service');
    Route::post('admin/homepage/hitwork', [PageController::class, 'homepagehitwork'])->name('admin.homepage.hitwork');
    Route::post('admin/homepage/msomeostar', [PageController::class, 'homepagemsomeostar'])->name('admin.homepage.msomeostar');
    Route::post('admin/homepage/brand', [PageController::class, 'homepagembrand'])->name('admin.homepage.brand');
    Route::get('homepage/star', [PageController::class, 'homepagemstar'])->name('admin.homepage.addstar');
    Route::post('admin/homepage/starstore', [PageController::class, 'homepagemstarstore'])->name('admin.homepage.star.store');
    Route::get('homepage/{id}', [PageController::class, 'homepagemstardestroy'])->name('homepagemstardestroy');
    
    Route::get('delete-brand/{id}', [PageController::class, 'deletebrand'])->name('delete.brand');
    Route::get('privacy', [PageController::class, 'privacy'])->name('admin.privacy');
    Route::post('privacy', [PageController::class, 'saveprivacy'])->name('save.privacy');
    
    Route::get('terms', [PageController::class, 'terms'])->name('admin.terms');
    Route::post('terms', [PageController::class, 'saveterms'])->name('save.terms');

    Route::get('setting', [SettingController::class, 'setting'])->name('admin.setting');
    Route::post('setting', [SettingController::class, 'savesetting'])->name('save.setting');

    Route::post('admin-setting', [SettingController::class, 'adminsetting'])->name('admin.setting.pass');

});

