<?php

use App\Http\Controllers\Home\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('Rentals', [PagesController::class, 'Rentals'])->name('rentals');
Route::get('Plans', [PagesController::class, 'plans'])->name('plans')->name('plans');
Route::get('Contact', [PagesController::class, 'contact'])->name('contact');
