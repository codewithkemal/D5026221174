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

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
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
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index');
Route::get('/nilaikuliah/tambahNilai','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');

Route::get('/vga', 'App\Http\Controllers\VgaController@index');
Route::get('/vga/tambah', 'App\Http\Controllers\VgaController@tambah');
Route::post('/vga/store', 'App\Http\Controllers\VgaController@store');
Route::get('/vga/edit/{kode}', 'App\Http\Controllers\VgaController@edit');
Route::post('/vga/update', 'App\Http\Controllers\VgaController@update');
Route::get('/vga/hapus/{kode}', 'App\Http\Controllers\VgaController@hapus');
Route::post('/vga/cari', 'App\Http\Controllers\VgaController@cari');
Route::get('/vga/view/{kode}', 'App\Http\Controllers\VgaController@view');

use App\Http\Controllers\CCController;

Route::get('/indexcc', [CCController::class, 'showForm']);
Route::get('/hasilcc', [CCController::class, 'showResult']);
Route::post('/hasilcc', [CCController::class, 'processForm']);
