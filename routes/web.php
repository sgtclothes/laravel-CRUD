<?php

use App\Http\Controllers\siswaController;

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

Route::get('/siswa', 'siswaController@index');
Route::post('/siswa/create', 'siswaController@create');
Route::get('/siswa/{id}/edit', 'siswaController@edit');
Route::post('/siswa/{id}/update', 'siswaController@update');
Route::get('/siswa/{id}/delete', 'siswaController@delete');
