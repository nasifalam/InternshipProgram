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

//Auth::routes(); --Benson and Vijay's Code- What does this code do?
Auth::routes(['/register' => true]);


// The route handles the call to fetch the users from the db. NA placed the following code.
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->middleware('admin');


// The route handles the deletion of the user
Route::get('/delete-user/{id}/delete', 'App\Http\Controllers\AdminController@delete')->middleware('admin');


//The route gets the form to create a new user--> NA
Route::get('/create/user', 'App\Http\Controllers\AdminController@create')->middleware('admin');

Route::post('/create/user', 'App\Http\Controllers\AdminController@createUser')->middleware('admin');
//Route::get('/create/user', 'App\Http\Controllers\AdminController@create')->middleware('admin');
Route::get('/edit-user/{id}/edit', 'App\Http\Controllers\AdminController@edit')->middleware('admin');
Route::post('/edit', 'App\Http\Controllers\AdminController@update')->middleware('admin');
Route::get("/search", 'App\Http\Controllers\AdminController@search')->middleware("admin");


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('home')->name('home');


//Routes for Programs
/* Route::get('/programs_homepage', 'App\Http\Controllers\ProgramController@programs_homepage'); */
Route::get('/manage_programs', 'App\Http\Controllers\ProgramController@index')->middleware('admin');
Route::get('/Programs/{id}', 'App\Http\Controllers\ProgramController@show');
Route::get('/edit-program/{id}/edit', 'App\Http\Controllers\ProgramController@edit')->middleware('admin');
Route::get('/delete-program/{id}/delete', 'App\Http\Controllers\ProgramController@delete');
Route::post('/programeditted', 'App\Http\Controllers\ProgramController@update')->middleware('admin');
Route::get('/create_program', 'App\Http\Controllers\ProgramController@create');
Route::post('/create_program', 'App\Http\Controllers\ProgramController@createProgram');
Route::get('/search_programs', 'App\Http\Controllers\ProgramController@searchPrograms');
Route::get('/search_programs_v1', 'App\Http\Controllers\ProgramController@searchPrograms_v1');
Route::get('/search_programs_v2', 'App\Http\Controllers\ProgramController@searchPrograms_v2');


//Routes for program applications
Route::post('/save_program', 'App\Http\Controllers\ApplicationController@newSave')->middleware('auth');