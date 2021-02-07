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

Auth::routes(['register' => false]);

// Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->middleware('admin');
Route::get('/edit', [App\Http\Controllers\AdminController::class, 'show'])->middleware('admin');
Route::get('/create', [App\Http\Controllers\AdminController::class, 'create'])->middleware('admin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('home')->name('home');
