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

// Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']); --> Andrw's commented code

// The route handles the call to fetch the users from the db. NA placed the following code.
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->middleware('admin');

//Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->middleware('admin');==>And's code. NA used this. We can remove it.

// The route handles the deletion of the user
Route::get('/delete-user/{id}/delete', 'App\Http\Controllers\AdminController@delete')->middleware('admin');


//Route::get('/edit', [App\Http\Controllers\AdminController::class, 'show'])->middleware('admin');



//Route::get('/create', [App\Http\Controllers\AdminController::class, 'create'])->middleware('admin'); --> Andrew code

//The route gets the form to create a new user--> NA
Route::get('/create/user', 'App\Http\Controllers\AdminController@create')->middleware('admin');

Route::post('/create/user', 'App\Http\Controllers\AdminController@createUser')->middleware('admin');
//Route::get('/create/user', 'App\Http\Controllers\AdminController@create')->middleware('admin');
Route::get('/edit-user/{id}/edit', 'App\Http\Controllers\AdminController@edit')->middleware('admin');
Route::post('/edit', 'App\Http\Controllers\AdminController@update')->middleware('admin');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('home')->name('home');


//Routes for Programs

Route::get('/manage_programs', 'App\Http\Controllers\ProgramController@index')->middleware('admin');
Route::get('/Programs/{program_id}', 'App\Http\Controllers\ProgramController@show');
Route::get('/edit-program/{program_id}/edit', 'App\Http\Controllers\ProgramController@edit');
Route::get('/delete-program/{program_id}/delete', 'App\Http\Controllers\ProgramController@delete');
Route::post('/edit_programs', 'App\Http\Controllers\ProgramController@update');
Route::get('/create_program', 'App\Http\Controllers\ProgramController@create');
Route::post('/create_program', 'App\Http\Controllers\ProgramController@createProgram');
