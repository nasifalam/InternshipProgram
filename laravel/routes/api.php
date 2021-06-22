<?php

use App\Http\Controllers\ApplicationsApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/applications', [ApplicationsApiController::class, 'index']);
Route::post('/applications', [ApplicationsApiController::class, 'store']);
Route::put('/applications/{application}', [ApplicationsApiController::class, 'update']);
Route::delete('/applications/{application}', [ApplicationsApiController::class, 'destroy']);

Route::get('/programs', "App\Http\Controllers\ProgramsApiController@index");
Route::post('/programs', "App\Http\Controllers\ProgramsApiController@store");
Route::put('/programs/{programs}', "App\Http\Controllers\ProgramsApiController@update");
Route::delete('/programs/{programs}',"App\Http\Controllers\ProgramsApiController@destroy");
