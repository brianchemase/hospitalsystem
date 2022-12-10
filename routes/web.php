<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReceptionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('reception.home');
});


Route::group(['prefix' => 'reception'], function() {

    Route::get('/', [ReceptionController::class, 'index'])->name('ReceptionHome');
    
    Route::get('/patients', [ReceptionController::class, 'PatientsList'])->name('PatientsList');
   // Route::get('/visits', [AppointmentsController::class, 'customersvisits']);
   // Route::get('/booking', [AppointmentsController::class, 'registerbooking']);
   // Route::post('/appointment-start',[AppointmentsController::class, 'startservice'])->name('booking.start');
   // Route::post('/appointment-end',[AppointmentsController::class, 'endservice'])->name('booking.end');
   // Route::post('/savebooking', [AppointmentsController::class, 'savebooking'])->name('savebooking');
    }
    );