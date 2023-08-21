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
    return view('welcome');
});


Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('/berita', \App\Http\Controllers\BeritaController::class);  
    Route::resource('/jabatan', \App\Http\Controllers\JabatanController::class);  
});
Route::resource('/news', \App\Http\Controllers\NewsController::class);
Route::resource('/profile', \App\Http\Controllers\ProfileController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\BeritaController::class, 'index'])->name('home');
