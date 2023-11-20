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

Route::get('/blog2', function () {
    return view('blog');
});

Route::get('/Week1', function () {
    return view('Week1');
});

Route::get('/Week2-2', function () {
    return view('Week2-2');
});

Route::get('/Week2-3', function () {
    return view('Week2-3');
});

Route::get('/Week4', function () {
    return view('Week4');
});

Route::get('/ETS', function () {
    return view('ETS');
});

// Route::get('/Week8', function () {
//     return view('week8');
// });

Route::get('/perkalian','App\Http\Controllers\DosenController@index') ;
Route::get('/show', 'App\Http\Controllers\DosenController@showBlog');
Route::get('/pegawai/{nama}', 'App\Http\Controllers\DosenController@showNama');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');


Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');
//ea
Route::get('/Linktree', function () {
    return view('Linktree');
});

Route::get('/Validasi1', function () {
    return view('Validasi1');
});

Route::get('/Validasi2', function () {
    return view('Validasi2');
});

Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
