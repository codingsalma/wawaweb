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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

//CRUD SISWA
Route::resource('siswa','SiswaController');
Route::get('/siswa/create','SiswaController@create');
Route::post('/siswa/store','SiswaController@store');
Route::get('/siswa/edit/{id}','SiswaController@edit');
Route::post('/siswa/update','SiswaController@update');
Route::get('/siswa/hapus/{id}','SiswaController@destroy');
//--end CRUD SISWA

//CRUD KELAS
Route::resource('kelas','KelasController');
Route::get('/kelas/create','KelasController@create');
Route::post('/kelas/store','KelasController@store');
Route::get('/kelas/edit/{id}','KelasController@edit');
Route::post('/kelas/update','KelasController@update');
Route::get('/kelas/hapus/{id}','KelasController@destroy');
//--end CRUD KELAS

//CRUD MAPEL
Route::resource('mapel','MapelController');
Route::get('/mapel/create','MapelController@create');
Route::post('/mapel/store','MapelController@store');
Route::get('/mapel/edit/{id}','MapelController@edit');
Route::post('/mapel/update','MapelController@update');
Route::get('/mapel/hapus/{id}','MapelController@destroy');
//--end CRUD MAPEL

