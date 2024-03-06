<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employee\EmployeeController;
use App\Http\Controllers\employee\JobController;


Route::middleware(['employee'])->prefix('employee')->as('employee.')->group(function () {
     Route::resource('/', EmployeeController::class);
    Route::get('/updatestatus', [EmployeeController::class, 'updatestatus'])->name('updatestatus');

     Route::get('/active-jobs', [JobController::class, 'activejob'])->name('activejob');
Route::get('/bookingsetAssigned/{id}/{status}', [JobController::class, 'bookingsetAssigned'])->name('booking.set.Assigned');
     
     Route::get('/all-jobs', [JobController::class, 'completedjob'])->name('completedjob');
     Route::get('/job/view/{id}', [JobController::class, 'viewjob'])->name('viewjob');
     Route::get('/check-update-status', [EmployeeController::class, 'checkAndUpdateStatus']);

     Route::get('/setting', [EmployeeController::class, 'setting'])->name('setting');
     Route::post('/setting/save', [EmployeeController::class, 'updatepass'])->name('settingsave');
  
});
