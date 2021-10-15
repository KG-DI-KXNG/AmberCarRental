<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PenaltyController;
use App\Http\Controllers\RentalDetailController;
use App\Http\Controllers\VehicleDetailController;

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

Route::view('/', 'welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

require __DIR__ . './home/home.php';

require __DIR__ . './admin/admin.php';

require __DIR__ . './associate/associate.php';

Route::resource('Payment', PaymentController::class);
Route::resource('Penalty', PenaltyController::class);
Route::resource('RentalDetails', RentalDetailController::class);
Route::resource('VehicleDetails', VehicleDetailController::class);
