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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::resource('lks', \App\Http\Controllers\LksController::class);
Route::resource('distribution', \App\Http\Controllers\DistributionController::class);
Route::get('stock', [\App\Http\Controllers\HomeController::class, 'stock']);
