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
    return view('layouts.admin');
});

Route::get('register', function () {
    return view('auth.register');
});

Route::resource('user', 'UserController');
Route::resource('role', 'RoleController');
Route::resource('salary', 'SalaryController');
Route::resource('attendance', 'AttendanceController');
Route::resource('concession', 'ConcessionController');
