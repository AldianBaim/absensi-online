<?php

use Illuminate\Support\Facades\Route;

/** Route for frontend */
Route::get('/', 'user\AuthController@index');
Route::post('user/login', 'user\AuthController@doLogin');
Route::get('user/home', 'user\HomeController@index');
Route::get('user/logout', 'user\AuthController@logout');
Route::get('user/about', 'user\HomeController@about');
Route::get('user/guide', 'user\HomeController@guide');

/** Route for backend */
Route::get('/admin', 'AuthController@index');
Route::get('register', 'AuthController@register');
Route::post('register', 'AuthController@doRegister');
Route::post('login', 'AuthController@doLogin');
Route::get('dashboard', 'DashboardController@index');
Route::get('logout', 'AuthController@logout');
Route::resource('user', 'UserController');
Route::resource('role', 'RoleController');
Route::resource('salary', 'SalaryController');
Route::resource('attendance', 'AttendanceController');
Route::resource('concession', 'ConcessionController');
