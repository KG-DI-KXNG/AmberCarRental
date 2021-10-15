<?php

use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\AdminController
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminRentalController;

Route::resource('Plan', PlanController::class);
Route::resource('Admin', AdminController::class);
Route::resource('Brand', BrandController::class);
Route::resource('Category', CategoryController::class);
Route::resource('AdminRental', AdminRentalController::class);
