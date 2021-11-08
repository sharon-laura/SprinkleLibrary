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
Route::get('/login','App\Http\Controllers\LoginController@index');
Route::post('/auth-login','App\Http\Controllers\LoginController@authlogin');
Route::get('/logout','App\Http\Controllers\LoginController@logout');
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function() {
    Route::get('/','App\Http\Controllers\BukuController@index');
    Route::get('/buku-create','App\Http\Controllers\BukuController@create');
    Route::post('/buku-save','App\Http\Controllers\BukuController@save');
    Route::get('/buku-edit/{id}','App\Http\Controllers\BukuController@edit');
    Route::post('/buku-update/{id}','App\Http\Controllers\BukuController@update');
    Route::get('/buku-delete/{id}','App\Http\Controllers\BukuController@delete');
});