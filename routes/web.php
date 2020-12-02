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
    Route::get('home', 'viewController@viewHome')->name('viewHome');
    Route::get('umkmCreate', 'viewController@viewUmkmCreate')->name('addUmkm');
    Route::get('umkm', 'UmkmController@show')->name('viewUmkm');
});

Route::post('/umkm/create', 'UmkmController@create')->name('createUmkm');

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/view/adminDashboard', 'UmkmController@showDashboard')->name('viewDashboard');
    Route::get('/view/umkmUpdate/{id}', 'UmkmController@showUpdate')->name('showUpdate');
    Route::patch('/view/umkmUpdate/{id}', 'UmkmController@update')->name('updateUmkm');
    Route::delete('/umkm/delete/{id}', 'UmkmController@delete')->name('umkmDelete');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
