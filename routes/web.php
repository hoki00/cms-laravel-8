<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Models\Pengguna;
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
    return view('login');
});

Route::get('/login', [LoginController::class, 'login']);
Route::post('/loginprocess', [LoginController::class, 'loginprocess']);

Route::get('/register', [LoginController::class, 'register']);
Route::post('/adminregister', [LoginController::class, 'adminregister']);

Route::get('/logout', [LoginController::class, 'logout']);


Route::get('/tes', function () {
    return view('tes', [
        'title' => 'Halaman Testing'
    ]);
});

// Route::get('/pengguna', [PenggunaController::class, 'index']);
// Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna');
Route::get('/pengguna', [PenggunaController::class, 'index']);

// Route::get('/tambah-pengguna', [PenggunaController::class, 'tambahDataPengguna'])->name('/tambah-pengguna');

Route::get('/tambah-pengguna', [PenggunaController::class, 'create']);
Route::post('/tambah-pengguna', [PenggunaController::class, 'store']);

Route::get('/detail-pengguna/{id}', [PenggunaController::class, 'show']);
Route::post('/edit-pengguna/{id}', [PenggunaController::class, 'edit']);

Route::get('/hapus-pengguna/{id}', [PenggunaController::class, 'destroy']);

Route::get('/pengguna/search', [PenggunaController::class, 'search']);

Route::get('/pengguna/filter', [PenggunaController::class, 'filter']);

Route::get('/downloadPDF', [PenggunaController::class, 'downloadDataPengguna']);


Route::get('/transaksi', [TransaksiController::class, 'index']);

Route::get('/tambah-transaksi', [TransaksiController::class, 'create']);
Route::post('/tambah-transaksi', [TransaksiController::class, 'store']);

Route::get('/detail-transaksi/{id}', [TransaksiController::class, 'show']);
Route::post('/edit-transaksi/{id}', [TransaksiController::class, 'edit']);

Route::get('/hapus-transaksi/{id}', [TransaksiController::class, 'destroy']);

Route::get('/transaksi/search', [TransaksiController::class, 'search']);

Route::get('/transaksi/filter', [TransaksiController::class, 'filter']);

Route::get('/downloadDataTransaksi', [TransaksiController::class, 'downloadDataPengguna']);

// // detail pengguna
// Route::get('pengguna/{id}', function($id) {
//     return view('detail-pengguna');
// });

// hapus data pengguna
// Route::resource('pengguna', PenggunaController::class)->middleware('auth');


