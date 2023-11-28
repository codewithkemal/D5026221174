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

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/week1', function () {
    return view('week1');
});

Route::get('/week2-2', function () {
    return view('week2-2');
});

Route::get('/week2-3', function () {
    return view('week2-3');
});

Route::get('/week4', function () {
    return view('week4');
});

Route::get('/ets', function () {
    return view('ets');
});

Route::get('/profile', function () {
    return view('profile');
});

// Route::get('/Week8', function () {
//     return view('week8');
// });

Route::get('/perkalian','App\Http\Controllers\DosenController@index') ;
Route::get('/show', 'App\Http\Controllers\DosenController@showBlog');
Route::get('/pegawai/custom-name/{nama}', 'App\Http\Controllers\DosenController@showNama');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');


Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');
//ea
Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/validasi1', function () {
    return view('validasi1');
});

Route::get('/validasi2', function () {
    return view('validasi2');
});

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');


Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
