<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('app/main');
})->name('main');
Route::get('/aboutCompany', [App\Http\Controllers\HomeController::class, 'aboutCompany'])->name('aboutCompany');
Route::get('/aboutWater', [App\Http\Controllers\HomeController::class, 'aboutWater'])->name('aboutWater');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
