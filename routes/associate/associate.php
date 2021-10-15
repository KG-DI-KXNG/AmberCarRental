<?php

use App\Http\Controllers\Associates\AssociateController;
use App\Http\Controllers\Associates\AssociateRentalController;

Route::resource('Associate', AssociateController::class);
Route::resource('AssociateRental', AssociateRentalController::class);
