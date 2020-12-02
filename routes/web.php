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
Route::get('/view/umkmUpdate/{id}', 'UmkmController@showUpdate')->name('showUpdate');
Route::post('/umkm/create', 'UmkmController@create')->name('createUmkm');
Route::patch('/view/umkmUpdate/{id}', 'UmkmController@update')->name('updateUmkm');
Route::delete('/umkm/delete/{id}', 'UmkmController@delete')->name('umkmDelete');
