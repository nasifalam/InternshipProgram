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
use App\Http\Controllers\ProgramController;

Route::get('/', function () {

  return view('welcome');

});



Route::get('/Programs', 'App\Http\Controllers\ProgramController@index');
Route::get('/Programs/{program_id}', 'App\Http\Controllers\ProgramController@show');
Route::get('/edit-program/{program_id}/edit', 'App\Http\Controllers\ProgramController@edit');
Route::get('/delete-program/{program_id}/delete', 'App\Http\Controllers\ProgramController@delete');
Route::post('/edit', 'App\Http\Controllers\ProgramController@update');
Route::get('/create', 'App\Http\Controllers\ProgramController@create');
Route::post('/create', 'App\Http\Controllers\ProgramController@createProgram');
Route::post('/create', 'App\Http\Controllers\ProgramController@createProgram');
