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



Route::get('/', '\App\Http\Controllers\User\UserController@dashboard')->name('user.dashboard');



Route::get('/admin/login', '\App\Http\Controllers\Admin\AdminController@login')->name('admin.login');

Route::get('/admin/dashboard', '\App\Http\Controllers\Admin\AdminController@dashboard')->name('admin.dashboard');