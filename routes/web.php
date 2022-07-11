<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;


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
Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::get('/pengguna/tambah', [PenggunaController::class, 'tambah']);
Route::post('/pengguna/tambah', [PenggunaController::class, 'simpan']);
Route::get('/pengguna/edit/{user_id}', [PenggunaController::class, 'ubah']);
Route::post('/pengguna/edit/{user_id}', [PenggunaController::class, 'ubahsimpan']);



