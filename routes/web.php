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
    return view('login');
});
Route::post('login-user', 'UsersController@login');
Route::get('apply', 'UsersController@getApplicationForm');
Route::post('apply', 'UsersController@submitApplication');
Route::get('confirm', 'UsersController@getConfirmationForm');
Route::post('process', 'UsersController@processApplication');
Route::get('recover', 'UsersController@recoverApplication');
Route::post('recover', 'UsersController@applicationRecovery');
