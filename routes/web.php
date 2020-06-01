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
Route::prefix('home')->group(function () {
    Route::get('/','HomeController@index')->name('home.index');
});

Route::prefix('user')->group(function () {
    Route::get('showLogin','UserController@showLogin')->name('user.showLogin');
    Route::post('login','UserController@login')->name('user.login');
    Route::get('logout','UserController@logout')->name('user.logout');
});
