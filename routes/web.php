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

Route::prefix('view')->group(function(){
    Route::get('umkmCreate', 'ViewController@viewUmkmCreate')->name('addUmkm');
    Route::get('umkm', 'UmkmController@show')->name('viewUmkm');
    Route::get('search', 'UmkmController@search')->name('searchUmkm');
    Route::get('API/WA/{id}', 'UmkmController@waAPI')->name('waAPI');
});

Route::post('/umkm/create', 'UmkmController@create')->name('createUmkm');

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/view/adminDashboard', 'UmkmController@showDashboard')->name('viewDashboard');
    Route::get('/view/umkmUpdate/{id}', 'UmkmController@showUpdate')->name('showUpdate');
    Route::patch('/view/umkmUpdate/{id}', 'UmkmController@update')->name('updateUmkm');
    Route::delete('/umkm/delete/{id}', 'UmkmController@delete')->name('umkmDelete');
    Route::get('/logout', 'UmkmController@adminLogout')->name('adminLogout');
});

Route::prefix('admin')->group(function(){
    Auth::routes();
});

