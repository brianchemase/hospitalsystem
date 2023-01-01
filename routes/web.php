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
   
    }
    );