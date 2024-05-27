<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengunjungController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function() {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'login'])->middleware('guest:web')->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::middleware('auth')->group(function () {
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        //fungsi crud admin
        Route::post('/tambah-admin', [AdminController::class, 'tambahAdmin'])->name('tambah-admin');
        Route::get('/data-admin', [AdminController::class, 'tampilAdmin'])->name('tampil-admin');
        Route::get('/edit-admin/{id}', [AdminController::class, 'editAdmin'])->name('edit-admin');
        Route::post('/update-admin/{id}', [AdminController::class, 'updateAdmin'])->name('update-admin');
        Route::delete('/hapus-admin/{id}', [AdminController::class, 'hapusAdmin'])->name('hapus-admin');
        Route::get('/riwayat-transaksi', [AdminController::class, 'riwayatTransaksi'])->name('riwayat-transaksi');
        Route::get('/cetak-riwayat', [AdminController::class, 'cetakRiwayat'])->name('cetak-riwayat');


        // update profile
        Route::get('/edit-profile', [AdminController::class, 'editProfile'])->name('edit-profile');
        Route::post('/update-profile/{id}', [AdminController::class, 'updateProfile'])->name('update-profile');

        //update password
        Route::get('/edit-password', [AdminController::class, 'editPassword'])->name('edit-password');
        Route::post('/update-password', [AdminController::class, 'updaterPassword'])->name('update-password');
    });
    
    //Role Pengunjung
    Route::middleware('pengunjung')->group(function () {
        Route::get('/pengunjung', [PengunjungController::class, 'pengunjung'])->name('pengunjung');

    });

    Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');
    Route::delete('/hapus-customer/{id}', [AdminController::class, 'hapusCustomer'])->name('hapus-customer');
});

