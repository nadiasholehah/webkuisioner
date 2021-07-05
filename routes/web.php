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
    return view('login.login');
});

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::post('/pertanyaan/create','PertanyaanController@create');
Route::get('/pertanyaan/{id}/edit','PertanyaanController@edit');
Route::post('/pertanyaan/{id}/update','PertanyaanController@update');