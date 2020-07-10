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

Route::get( '/login', 'Auth\Auth0IndexController@login' )->name( 'login' );
Route::get( '/logout', 'Auth\Auth0IndexController@logout' )->name( 'logout' )->middleware('auth');

Route::get( '/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name( 'auth0-callback' );





Route::get('/', '\App\Http\Controllers\User\UserController@dashboard')->name('user.dashboard');

Route::get('/result', '\App\Http\Controllers\User\ResultController@show')->name('user.result');

Route::get('/test', '\App\Http\Controllers\User\TestController@test')->name('user.test');


Route::get('/admin/login', '\App\Http\Controllers\Admin\AdminController@login')->name('admin.login');

Route::get('/admin/dashboard', '\App\Http\Controllers\Admin\AdminController@dashboard')->name('admin.dashboard');