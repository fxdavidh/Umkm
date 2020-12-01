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

Route::get('/view/home', 'viewController@viewHome')->name('viewHome');
Route::get('/view/umkmCreate', 'viewController@viewUmkmCreate')->name('addUmkm');
Route::get('/view/umkm', 'UmkmController@show')->name('viewUmkm');
Route::get('/view/adminDashboard', 'UmkmController@showDashboard')->name('viewDashboard');
Route::post('/umkm/create', 'UmkmController@create')->name('createUmkm');
