<?php

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

Route::get('/', function () {
    return view('welcome');
});


require __DIR__ . './richard.php';
require __DIR__ . './akeem.php';
require __DIR__ . './bailey.php';
require __DIR__ . './ezra.php';
require __DIR__ . './javoneil.php';
require __DIR__ . './kevando.php';
require __DIR__ . './latoya.php';
require __DIR__ . './olivia.php';
require __DIR__ . './ronald.php';
require __DIR__ . './grant.php';
