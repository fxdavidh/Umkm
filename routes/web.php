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

Route::get('/adminCreate', 'viewController@viewAdminCreate');
Route::get('/umkmCreate', 'viewController@viewUmkmCreate');

Route::post('/umkm/create', 'UmkmController@create')->name('createUmkm');
